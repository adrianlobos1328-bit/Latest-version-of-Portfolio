<?php
require_once __DIR__ . '/auth.php';
$pageTitle = $pageTitle ?? 'Adri';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/auth.css">
</head>
<body>

    <header id="site-header">
        <div id="header-logo">
            <img src="./images/rose.png" alt="rose" id="header-rose">
            <a href="index.php">Adri</a>
        </div>
        <nav id="header-nav">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="works.php">Projects</a>
            <a href="contacts.php">Contact</a>
            <?php if (is_logged_in()): ?>
                <a href="logout.php">Logout (<?= e($_SESSION['username']) ?>)</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>
