<?php
    include("../Common/connection.php");
    if(isset($_POST['add_product'])){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['desc'];
        $image = $_FILES['image']['name'];
        $img_temp_name = $_FILES['image']['tmp_name'];
        $img_folder = "../Images/".$image;

        $insert_query = mysqli_query($conn,"insert into products (product_name,price,product_desc,image) 
        values('$product_name','$price','$description','$image')") or die("Query Execution Failed.");
        if($insert_query){
            move_uploaded_file($img_temp_name,$img_folder);
            $display_message = "Product inserted successfully";
        }
        else{
            $display_message = "Product insertion failed.";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" class="rel">
    <link rel="stylesheet" href="../Common/exstyles2.css" class="rel">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Dai+Banna+SIL:wght@300&family=Lobster&display=swap" rel="stylesheet">
    

    <title>Add Items</title>
</head>
<body>
    <?php 
        include("../Common/header.php");
    ?>
    
    <div class="viewbox">
        <?php
            if (isset($display_message)){
                echo "<div class='display-message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
        
        </div>";
            }
        ?>
        
        <section class="input-box">
            <h2>Add Products</h2>
            <form method="post" enctype="multipart/form-data">
                <label for="product-name">product name</label >
                <input class="input-field" name="product_name" type="text" required placeholder="Enter the product name">
                <label for="price">Price</label>
                <input class="input-field" name="price" type="number" required placeholder="Enter the price">
                <label for="price">Description</label>
                <input class="input-field" name="desc" type="text" required placeholder="Enter the description">
                <input type="file" name="image" required accept="image/jpg, image/png, image/jpeg">
                <input type="submit" name="add_product" value="Add Item">
            </form>
        </section>
        <div><a href="../Store-Page/store.php">Go to store</a></div>
    </div>
    
</body>
<?php include("../Common/footer.php")?>
</html>