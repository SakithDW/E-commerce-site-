<?php 
session_start();

include("../Common/connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(!empty($username) && !empty($password) && !empty($email))
    {
        // save to database
        $user_id = random_num(20);

        // Prepare the SQL query
        $stmt = $conn->prepare("INSERT INTO users (user_id, username, password, email) VALUES (?, ?, ?, ?)");

        // Check if prepare() failed and output the error
        if ($stmt === false) {
            die('Error preparing the statement: ' . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("ssss", $user_id, $username, $password, $email);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: login.php");
            die;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
    <div class="banner">
        <p>Log in to access your account, track orders, and <br>
            enjoy personalized shopping experiences.<br>
             <br>New to our store? <br> <br>
        <a href="#">Create an account</a> to start shopping today!</p>
    </div>
    <div class="login-container">
        <h2>Sign Up</h2>
        <form method="post">
            <label for="signup-username">Username:</label>
            <input class="input-field" type="text" id="signup-username" name="username" required>
            <label for="signup-password">Password:</label>
            <input class="input-field" type="password" id="signup-password" name="password" required>
            <label for="signup-email">Email:</label>
            <input class="input-field" type="email" id="signup-email" name="email" required>
            <input type="submit" value="Sign Up">
            <p>Already have an account? <a href="./login.php" id="show-login">Login</a></p>
        </form>
    </div>
</body>
</html>
