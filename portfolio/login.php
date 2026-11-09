<?php
require_once __DIR__ . '/includes/auth.php';

if (is_logged_in()) {
    header('Location: index.php');
    exit;
}

$errors = [];
$identity = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identity = trim($_POST['identity'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!csrf_check()) {
        $errors[] = 'Your session expired. Please try again.';
    } elseif ($identity === '' || $password === '') {
        $errors[] = 'Enter your username or email and your password.';
    } else {
        try {
            $stmt = db()->prepare('SELECT id, username, password_hash FROM users WHERE username = ? OR email = ? LIMIT 1');
            $stmt->execute([$identity, $identity]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['user_id'] = (int) $user['id'];
                $_SESSION['username'] = $user['username'];
                header('Location: index.php');
                exit;
            }
            $errors[] = 'Incorrect username/email or password.';
        } catch (PDOException $ex) {
            $errors[] = 'Could not reach the database. Check includes/config.php.';
        }
    }
}

$pageTitle = 'Login | Adri';
include __DIR__ . '/includes/header.php';
?>

    <div id="auth-container">
        <div class="title-font my-works-title reveal">
            <p>LOGIN</p>
        </div>

        <form id="auth-card" class="reveal" method="post" action="login.php" style="transition-delay: 0.1s;">
            <img src="./images/rose.png" alt="" id="auth-rose">

            <?php if (isset($_GET['registered'])): ?>
                <p class="auth-message success">Account created. You can log in now.</p>
            <?php endif; ?>
            <?php foreach ($errors as $error): ?>
                <p class="auth-message error"><?= e($error) ?></p>
            <?php endforeach; ?>

            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">

            <label for="identity">Username or email</label>
            <input type="text" id="identity" name="identity" value="<?= e($identity) ?>" autocomplete="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="current-password" required>

            <button type="submit">Log in</button>

            <p class="auth-switch">No account yet? <a href="register.php">Create one</a></p>
        </form>
    </div>

<?php include __DIR__ . '/includes/footer.php'; ?>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('visible');
            });
        }, { threshold: 0.15 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>
