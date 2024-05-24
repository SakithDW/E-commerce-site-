<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" class="rel">
    <link rel="stylesheet" href="../Common/exstyles2.css" class="rel">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Dai+Banna+SIL:wght@300&family=Lobster&display=swap" rel="stylesheet">
    

    <title>Add Items</title>
</head>
<header><?php include("../Common/header.php")?></header>
<body>
    
    <div class="viewbox">
        <section class="input-box">
            <h2>Add Products</h2>
            <form method="post">
                <label for="product-name">product name</label>
                <input class="input-field" type="text" required placeholder="Enter the product name">
                <label for="price">Price</label>
                <input class="input-field" type="number" required placeholder="Enter the price">
                <label for="price">Description</label>
                <input class="input-field" type="text" required placeholder="Enter the description">
                <input type="file" required>
                <input type="submit" value="submit">
            </form>
        </section>
    </div>
</body>
<?php include("../Common/footer.php")?>
</html>