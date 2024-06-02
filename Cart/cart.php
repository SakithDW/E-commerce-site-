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
                <thead>
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>HEADPHONE</td>
                        <td><img src="headphone.jpg" alt="Headphone" class="product-image"></td>
                        <td>$12,000/-</td>
                        <td>
                            <div class="quantity-box">
                                <input type="number" min=1>
                                <input type="submit" name="" id="update-quantity" value="update">
                            </div>
                        </td>
                        <td>$12,000/-</td>
                        <td><a href="#" class="remove-link">REMOVE</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>HEADPHONE</td>
                        <td><img src="headphone.jpg" alt="Headphone" class="product-image"></td>
                        <td>$12,000/-</td>
                        <td>
                            <div class="quantity-box">
                                <input type="number" min=1>
                                <input type="submit" name="" id="update-quantity" value="update">
                            </div>
                        </td>
                        <td>$12,000/-</td>
                        <td><a href="#" class="remove-link">REMOVE</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>HEADPHONE</td>
                        <td><img src="headphone.jpg" alt="Headphone" class="product-image"></td>
                        <td>$12,000/-</td>
                        <td>
                            <div class="quantity-box">
                                <input type="number" min=1>
                                <input type="submit" name="" id="update-quantity" value="update">
                            </div>
                        </td>
                        <td>$12,000/-</td>
                        <td><a href="#" class="remove-link">REMOVE</a></td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="cart-actions">
                <button class="continue-btn">Continue Shopping</button>
                <div class="grand-total">Grand Total : $52,000 /-</div>
                <button class="checkout-btn">Proceed to checkout</button>
            </div>
        </div>
    </div>
    <?php include("../Common/footer.php")?>
    
    
</body>
</html>