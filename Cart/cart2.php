<?php include("../Common/connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Common/exstyles2.css">
    <link rel="stylesheet" href="./cart.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Lobster&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Dai+Banna+SIL:wght@300&family=Lobster&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:ital,wght@0,300;1,300&family=Ruwudu:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:ital,wght@0,300;1,300&family=Roboto+Slab:wght@600&family=Ruwudu:wght@700&display=swap" rel="stylesheet">
    <title>cart</title>
</head>
<body>
    <?php include("../Common/header.php")?>
    <div class="viewbox">
        <div class="cart-container">
            <table class="cart-table">
                <?php 
                    $select_cart_products= mysqli_query($conn,"select * from `cart`");
                    if(mysqli_num_rows($select_cart_products)>0){
                        echo "<thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $num=1;
                    while($fetch_cart_products= mysqli_fetch_assoc($select_cart_products)){
                        
                        echo "
                        <tr>
                                <td>{$num}</td>
                                <td>{$fetch_cart_products['name']}</td>
                                <td><img src='../Images/{$fetch_cart_products['image']}' alt='Headphone' class='product-image'></td>
                                <td>{$fetch_cart_products['price']}/-</td>
                                <td>
                                    <div class='quantity-box'>
                                        <input type='number' min=1>
                                        <input type='submit' name='' id='update-quantity' value='update'>
                                    </div>
                                </td>
                                <td>$12,000/-</td>
                                <td><a href='#' class='remove-link'><i class='fas fa-trash'></i><p>remove</p></a></td>
                            </tr>";

                        ?>
                        <?php
                    $num++;
                    
                    }
                    echo"";
                    }
                    else{
                        echo "No products available";
                    }
                ?>
                </tbody></table>
            <div class="cart-actions">
                <a href="" class="continue-btn">Continue Shopping</a>
                <div class="grand-total">Grand Total : <span>$52,000 /-</span></div>
                <a href="" class="checkout-btn">Proceed to checkout</a>
            </div>
            <div class="delete-all"><div class="delete-all-btn"><a href=""><i class="fas fa-trash"></i></a><p>Delete All</p></div></div>
        </div>
    </div>
    <?php include("../Common/footer.php")?>
    
    
</body>
</html>