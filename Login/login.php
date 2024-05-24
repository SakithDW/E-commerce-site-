<?php

    session_start();

        include("../Common/connection.php");
        include("functions.php");
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(!empty($username)&&!empty($password)){
                $query = "select * from users where username = '$username' and password = '$password'";
                $result = mysqli_query($conn, $query);

               
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../shop-page/shop.php");
						die;
					}
				}
                // echo"wrong username or passsword";
			

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
    <title>Login</title>
</head>
<body>
    
    <div class="banner">
        <p>Log in to access your account, track orders, and <br>
            enjoy personalized shopping experiences.<br>
             <br>New to our store? <br> <br>
        <a href="#">Create an account</a> to start shopping today!</p>
    </div>
    <div class="login-container">
        <h2>LogIn</h2>
        <!-- <form name="form" action="login.php" method="post"> -->
        <form method="post">
            <label for="username">Username</label>
            <input class="input-field" type="text" id="username" name="username" required placeholder="Enter Your usermame ">
            <label for="password">Password</label>
            <input class="input-field" type="password" id="password" name="password" required placeholder="Enter Your password ">
            <input type="submit" value="Login">
            <p>Don't you have an account.<a id="show-signup"  href="./signup.php">Register here.</a></p>
        </form>
         
        
    </div>
    
</body>
</html>

