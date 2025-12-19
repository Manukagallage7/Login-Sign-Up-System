<?php

function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['confirm_password'])) {

        include "../db_conn.php";

    $first_name = validate_input($_POST['first_name']);
    $last_name = validate_input($_POST['last_name']);
    $email = validate_input($_POST['email']);
    $password = validate_input($_POST['password']);
    $confirm_password = validate_input($_POST['confirm_password']);


    if(empty($first_name)) {
        $errorM = "First Name is required.";
        header("Location: ../signup.php?error=$errorM");
    } else if(empty($last_name)) {
        $errorM = "Last Name is required.";
        header("Location: ../signup.php?error=$errorM");
    } else if(empty($email)) {
        $errorM = "Email is required.";
        header("Location: ../signup.php?error=$errorM");
    } else if(empty($password)) {
        $errorM = "Password is required.";
        header("Location: ../signup.php?error=$errorM");
    } else if(empty($confirm_password)) {
        $errorM = "Confirm Password is required.";
        header("Location: ../signup.php?error=$errorM");
    } else if($password !== $confirm_password) {
        $errorM = "Passwords do not match.";
        header("Location: ../signup.php?error=$errorM");
    } else {
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0) {
            $errorM = "Email is already registered.";
            header("Location: ../signup.php?error=$errorM");
        } else{
            $password= password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(first_name, last_name, email, password) VALUES(?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$first_name, $last_name, $email, $password]);

            $successM = "User created successfully.";
            header("Location: ../signup.php?success=$successM");

        }
    }

    echo "<div class='success-message'>User $first_name $last_name registered successfully with email $email.</div>";
} else {
    header("Location: ../signup.php");
}

?>