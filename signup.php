<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <?php if(isset($_GET['error'])) { ?>
        <b style='color:#f00;'><?= $_GET['error'] ?></b><br>
    <?php } ?>
    <form action="app/signup.php" method="POST">
        <label>First Name</label><br>
        <input type="text" name="first_name" placeholder="First Name" required><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name" placeholder="Last Name" required><br>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <label>Confirm Password</label><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
        <button type="submit">Sign Up</button>
        <a href="login.php">Login</a>
    </form>
</body>
</html>