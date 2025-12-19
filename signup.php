<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <h1 class="brand">Create account</h1>

            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-error"><?= htmlspecialchars($_GET['error']) ?></div>
            <?php } ?>

            <?php if(isset($_GET['success'])) { ?>
                <div class="alert alert-success"><?= htmlspecialchars($_GET['success']) ?></div>
            <?php } ?>

            <form action="app/signup.php" method="POST" class="auth-form">
                <div class="form-row">
                    <label for="first_name">First Name</label>
                    <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
                </div>

                <div class="form-row">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
                </div>

                <div class="form-row">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-row">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-row">
                    <label for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>

                <p class="muted">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>