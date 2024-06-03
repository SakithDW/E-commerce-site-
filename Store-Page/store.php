<?php
    include("../Common/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Common/exstyles2.css" class="rel">
    <link rel="stylesheet" href="./store.css" class="rel">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Dai+Banna+SIL:wght@300&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:ital,wght@0,300;1,300&family=Ruwudu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:ital,wght@0,300;1,300&family=Roboto+Slab:wght@600&family=Ruwudu:wght@700&display=swap" rel="stylesheet">
    <title>Store Page</title>
</head>
<body>
    <?php include("../Common/header.php")?>
    <div class="box-container">
        <div class="table-container">
            <?php
            $display_product = mysqli_query($conn,"SELECT * FROM `products`");
            if(mysqli_num_rows($display_product) > 0){
                echo "<table>
                <thead>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
                $num = 1;
                while($row = mysqli_fetch_assoc($display_product)){
                    $product_id = $row['id'];
                    $product_name = $row['product_name'];
                    $price = $row['price'];
                    $description = $row['product_desc'];
                    $image = $row['image'];
                    echo "<tr class='data'>
                        <td>{$num}</td>
                        <td>{$product_name}</td>
                        <td><img src='../Images/{$image}' alt='' class='product-image'></td>
                        <td>{$description}</td>
                        <td>{$price}</td>
                        <td id='action-btns'>
                            <a href='./delete.php?delete={$product_id}' class='delete-prod-btn' onclick='return confirm(\"Are you sure you want to delete this product?\")'>
                            <i class='fas fa-trash'></i></a>
                            <a href='./edit.php?edit={$product_id}' class='edit-prod-btn'><i class='fas fa-edit'></i></a>
                        </td>
                    </tr>";
                    $num++;
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='empty-text'>No products found.</div>";
            }
            ?>
        </div>
    </div>
</body>
<footer>
    <?php include("../Common/footer.php")?>
</footer>
</html>
