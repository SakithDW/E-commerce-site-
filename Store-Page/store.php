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
        <table>
            <thead>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
                
            </thead>
            <tbody>
                <?php
                $num = 1;
                $display_product = mysqli_query($conn,"select* from products");
                if(mysqli_num_rows($display_product)>0){
                    while($row = mysqli_fetch_assoc($display_product)){
                        // $product_id = $row['id'];
                        $product_name = $row['product_name'];
                        $price = $row['price'];
                        $description = $row['product_desc'];
                        $image = $row['image'];

                        ?>
                        <!-- diplay table -->
                        <tr class="data">
                            <td><?php echo $num ?></td>
                            <td><?php echo $product_name ?></td>
                            <!-- <td><?php echo $image ?></td> -->
                            <td><img src="../Images/<?php echo $image ?>" alt="" class="product-image"></td>

                            <td><?php echo $description ?></td>
                            <td><?php echo $price ?></td>
                            <td id="action-btns">
                                <a href="" class="delete-prod-btn"><i class="fas fa-trash"></i></a>
                                <a href="" class="edit-prod-btn"><i class="fas fa-edit"></i></a>

                            </td>
                        </tr>
                <?php
                $num++;
                    }
                }
                else{
                    echo "<tr><td colspan='6'>No products found.</td></tr>";
                }
                ?>
                

            </tbody>
        </table>
    </div>
    </div>
    

</body>
<Footer>
    <?php include("../Common/footer.php")?>
</Footer>
</html>