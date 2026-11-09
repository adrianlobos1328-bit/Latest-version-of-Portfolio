    <footer id="site-footer">
        <div id="footer-inner">
            <div id="footer-logo" class="reveal">
                <img src="./images/rose.png" alt="rose" id="footer-rose">
                <a href="index.php">Adri</a>
            </div>
            <div id="footer-links" class="reveal" style="transition-delay: 0.1s;">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="works.php">Projects</a>
                <a href="contacts.php">Contact</a>
                <?php if (is_logged_in()): ?>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                <?php endif; ?>
            </div>
            <p id="footer-copy" class="reveal" style="transition-delay: 0.2s;">&copy; <?= date('Y') ?> Adri. All rights reserved.</p>
        </div>
    </footer>
