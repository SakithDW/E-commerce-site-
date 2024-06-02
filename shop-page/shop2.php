<?php 
    include("../Common/connection.php");
    if(isset($_POST['add_cart'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_img = $_POST['product_image'];
        $product_quantity =1;

        $select_cart = mysqli_query($conn,"select * from `cart` where name = '$product_name'");
        if(mysqli_num_rows($select_cart)>0){
            $display_message= "Product already added"; 
        }
        else{
            $insert_products = mysqli_query($conn,"insert into `cart` (name,price,image,quantity)
            values('$product_name','$product_price','$product_img','$product_quantity')");
            $display_message="Product added successfully."; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./shop.css">
    <link rel="stylesheet" href="../Common/exstyles2.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Lobster&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Big+Shoulders+Inline+Text:wght@900&family=Dai+Banna+SIL:wght@300&family=Lobster&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:ital,wght@0,300;1,300&family=Ruwudu:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:ital,wght@0,300;1,300&family=Roboto+Slab:wght@600&family=Ruwudu:wght@700&display=swap" rel="stylesheet">

    <title>Shop</title>
</head>
<body>
    <?php include("../Common/header.php") ?>
    <div class="slide-box" id="box">
        <div class="link-box2">
            <div class="nav-link2"><a href="#">HOME</a></div>
            <div class="nav-link2"><a href="#">SHOP</a></div>
            <div class="nav-link2" ><a href="#">HELP?</a></div>
        </div>
        <button class="back-btn" onclick="go_back()">
            
        </button>
    </div>
    <div class="viewbox">
        <?php
        if(isset($display_message)){
            echo "<div class='display-message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
        
        </div>";
        }
        ?>
        
        <div class="box2"> 
            <?php
            $select_products = mysqli_query($conn, "select * from `products`");
            if(mysqli_num_rows($select_products)>0){
                while($fetch_product = mysqli_fetch_assoc($select_products)){
                    ?>
                    <form action="" method="post">
                        <div class="item-box">
                            <div class="item-img" ><img src="../Images/<?php echo $fetch_product['image']?>" alt=""></div>
                            <div class="item-desc">
                                <a class="desc" href="#"><h3 class="info"><?php echo $fetch_product['product_name']?></h3></a>
                            </div>
                            <div class="div1">
                                <div class="price">$<?php echo $fetch_product['price']?></div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']?>">
                                <input type="submit" name="add_cart" value="Add To Cart" class="buy">
                            </div>
                        </div>
                    </form>

                    <?php
                }
                
            }else{
                echo "No Products available.";
            }
        ?></div>
        
        
       
        

        
    </div>
</body>
<?php include("../Common/footer.php")?>
<script>
    let box = document.getElementById("box");

    function drag_right(){
        box.style.marginLeft = "0px";  
    }

    function go_back() {
        box.style.marginLeft = "-540px";
    }
</script>
</html>