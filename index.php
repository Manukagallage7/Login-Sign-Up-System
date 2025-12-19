<?php
session_start();
    if (isset($_SESSION['email']) &&
        isset($_SESSION['user_id'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <h2 class="brand">Welcome, <?= htmlspecialchars($_SESSION['first_name']) ?>!</h2>
            <p class="muted">Email: <?= htmlspecialchars($_SESSION['email']) ?></p>
            <div style="text-align:center; margin-top:18px;">
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    }
    else {
        $errorM = "You must login first.";
        header("Location: login.php?error=$errorM");
    }
?>