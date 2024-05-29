<?php
include("../Common/connection.php");

if (isset($_POST['update_product'])) {
    $update_prod_id = $_POST['update_prod_id'];
    $update_prod_name = $_POST['update_name'];
    $update_price = $_POST['update_price'];
    $update_desc = $_POST["update_desc"];
    $update_img = $_FILES["update_image"]['name'];
    $update_prod_img_temp_name = $_FILES['update_image']['tmp_name'];
    $update_img_folder = '../Images/' . $update_img;

    $update_products = mysqli_query($conn, "UPDATE `products` SET product_name = '$update_prod_name', price = '$update_price', product_desc = '$update_desc', image = '$update_img' WHERE id = '$update_prod_id'");

    if ($update_products) {
        move_uploaded_file($update_prod_img_temp_name, $update_img_folder);
        header("location: ./store.php ");
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./edit.css" class="rel">
    <link rel="stylesheet" href="../Common/exstyles2.css" class="rel">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Dai+Banna+SIL:wght@300&family=Lobster&display=swap" rel="stylesheet">

    <title>Edit Items</title>
</head>
<body>
    <?php include("../Common/header.php"); ?>

    <div class="viewbox">
        <section class="input-container">
            <h2>Edit Products</h2>

            <?php
            if (isset($_GET['edit'])) {
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$edit_id'");

                if ($edit_query && mysqli_num_rows($edit_query) > 0) {
                    $fetch_data = mysqli_fetch_assoc($edit_query);
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="img-box"><img class="image" src="../Images/<?php echo $fetch_data['image'] ?>" alt=""></div>
                        <input type="hidden" name="update_prod_id" value="<?php echo $fetch_data['id'] ?>">
                        <label for="product-name">Product Name</label>
                        <input class="input-field" name="update_name" type="text" value="<?php echo $fetch_data['product_name'] ?>" required placeholder="Enter the product name">
                        <label for="price">Price</label>
                        <input class="input-field" name="update_price" type="number" value="<?php echo $fetch_data['price'] ?>" required placeholder="Enter the price">
                        <label for="description">Description</label>
                        <input class="input-field" name="update_desc" type="text" value="<?php echo $fetch_data['product_desc'] ?>" required placeholder="Enter the description">
                        <input type="file" name="update_image" required accept="image/jpg, image/png, image/jpeg">
                        <div class="submit-box">
                            <input type="submit" id="update-btn" name="update_product" value="Update">
                            <input type="submit" id="reset-btn" name="reset" value="Cancel">
                        </div>
                    </form>
                    <?php
                } else {
                    echo "No product found with the given ID.";
                }
            }
            ?>
        </section>
        <div><a href="../Store-Page/store.php">Go to store</a></div>
    </div>

</body>
<?php include("../Common/footer.php") ?>
</html>
