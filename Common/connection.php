<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $db_name = "login_sample_db";

    $conn= mysqli_connect($servername,$username,$password,$db_name);

    if (!$conn= mysqli_connect($servername,$username,$password,$db_name)){
        die("Failed to connect");
    }
    
    // $conn = new mysqli($servername,$username,$password,$db_name);
    
    // if($conn->connect_error){
    //     die("connection failed".$conn->connect_error);
    // }
    // echo "";

?>