<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightTech Solutions | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar">
    <a class="brand" href="index.php">BrightTech Solutions</a>
    <nav>
        <a href="index.php">Home</a>
        <?php if (is_logged_in()): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="register.php">Employee Registration</a>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
</header>
<main class="hero">
    <section class="hero-card">
        <p class="eyebrow">WELCOME TO BRIGHTTECH</p>
        <h1>One workplace. Better teamwork.</h1>
        <p>BrightTech Solutions provides a simple employee portal to access company information securely.</p>
        <div class="actions">
            <a class="btn" href="register.php">Employee Registration</a>
            <a class="btn btn-outline" href="login.php">Login</a>
        </div>
    </section>
    <section class="info-grid">
        <article class="info-card"><h3>Employee Portal</h3><p>Employees can register and log in to view their own account details.</p></article>
        <article class="info-card"><h3>Admin Portal</h3><p>Authorized administrators can view the registered employee list and total count.</p></article>
        <article class="info-card"><h3>Secure Access</h3><p>Passwords are hashed and pages are protected according to user roles.</p></article>
    </section>
</main>
<footer>© <?php echo date("Y"); ?> BrightTech Solutions</footer>
</body>
</html>
