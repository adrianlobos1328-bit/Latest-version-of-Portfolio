<?php
require_once __DIR__ . '/includes/auth.php';

if (is_logged_in()) {
    header('Location: index.php');
    exit;
}

$errors = [];
$username = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm'] ?? '';

    if (!csrf_check()) {
        $errors[] = 'Your session expired. Please try again.';
    } else {
        if (!preg_match('/^[A-Za-z0-9_]{3,30}$/', $username)) {
            $errors[] = 'Username must be 3-30 characters: letters, numbers or underscores.';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 120) {
            $errors[] = 'Enter a valid email address.';
        }
        if (strlen($password) < 8) {
            $errors[] = 'Password must be at least 8 characters.';
        }
        if ($password !== $confirm) {
            $errors[] = 'Passwords do not match.';
        }
    }

    if (!$errors) {
        try {
            $check = db()->prepare('SELECT username, email FROM users WHERE username = ? OR email = ?');
            $check->execute([$username, $email]);
            foreach ($check->fetchAll() as $row) {
                if (strcasecmp($row['username'], $username) === 0) $errors[] = 'That username is taken.';
                if (strcasecmp($row['email'], $email) === 0) $errors[] = 'That email is already registered.';
            }

            if (!$errors) {
                $insert = db()->prepare('INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)');
                $insert->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT)]);
                header('Location: login.php?registered=1');
                exit;
            }
        } catch (PDOException $ex) {
            $errors[] = 'Could not reach the database. Check includes/config.php.';
        }
    }
}

$pageTitle = 'Register | Adri';
include __DIR__ . '/includes/header.php';
?>

    <div id="auth-container">
        <div class="title-font my-works-title reveal">
            <p>REGISTER</p>
        </div>

        <form id="auth-card" class="reveal" method="post" action="register.php" style="transition-delay: 0.1s;">
            <img src="./images/rose.png" alt="" id="auth-rose">

            <?php foreach ($errors as $error): ?>
                <p class="auth-message error"><?= e($error) ?></p>
            <?php endforeach; ?>

            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= e($username) ?>" autocomplete="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= e($email) ?>" autocomplete="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="new-password" minlength="8" required>

            <label for="confirm">Confirm password</label>
            <input type="password" id="confirm" name="confirm" autocomplete="new-password" minlength="8" required>

            <button type="submit">Create account</button>

            <p class="auth-switch">Already registered? <a href="login.php">Log in</a></p>
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
