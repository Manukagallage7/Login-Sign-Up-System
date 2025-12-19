<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <h1 class="brand">Welcome back</h1>

            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-error"><?= htmlspecialchars($_GET['error']) ?></div>
            <?php } ?>

            <?php if(isset($_GET['success'])) { ?>
                <div class="alert alert-success"><?= htmlspecialchars($_GET['success']) ?></div>
            <?php } ?>

            <form action="app/login.php" method="POST" class="auth-form">
                <div class="form-row">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-row">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <p class="muted">Don't have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>