<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $db_name = "login_sample_db";

    $conn= mysqli_connect($servername,$username,$password,$db_name,3308);

    if (!$conn= mysqli_connect($servername,$username,$password,$db_name,3308)){
        die("Failed to connect");
    }
    
    // $conn = new mysqli($servername,$username,$password,$db_name);
    
    // if($conn->connect_error){
    //     die("connection failed".$conn->connect_error);
    // }
    // echo "";

?>