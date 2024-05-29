<?php
    include "../Common/connection.php";
    if (isset($_GET['delete'])){
        $delete_id = ($_GET['delete']);
        $query = "DELETE FROM `products` where `id` = $delete_id";
        echo $query;
        $delete_query = mysqli_query($conn,$query ) or die("query failed: ".mysqli_error($conn));
        
        if($delete_query){
            echo"Product deleted";
            header('location: ./store.php');
            
        }
        else{
            echo"deletion failed";
            header('location: ./store.php');
            
        }

    }
?>