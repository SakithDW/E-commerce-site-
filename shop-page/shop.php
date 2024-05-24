<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="../Common/exstyles2.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">

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
        <div class="sub-box box1">
            <div class="shop-box ">
                <div class="item-box">
                    <div class="item-img" id="img1"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Monkey with headphones NFT</h3></a>
                    </div>
                    <div class="div1">
                        <div class="price">$250</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
                <div class="item-box">
                    <div class="item-img" id="img2"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Scary monkey with a helmet NFT</h3></a>
                    </div>
                    <div class="div1">
                        <div class="price">$350</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="shop-box">
                <div class="item-box">
                    <div class="item-img" id="img3"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Young stylish spiky boy with sunglasses NFT</h3></a>
                    </div>
                    <div class="div1">
                        <div class="price">$470</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
                <div class="item-box">
                    <div class="item-img" id="img4"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Dr.Monkey with a slight smile NFT</h3></a>
                        
                    </div>
                    <div class="div1">
                        <div class="price">$500</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-box">
            <div class="shop-box">
                <div class="item-box">
                    <div class="item-img" id="img5"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Stylish monkey with a cool winter cap NFT</h3></a>
                        
                    </div>
                    <div class="div1">
                        <div class="price">$390</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
                <div class="item-box">
                    <div class="item-img" id="img6"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Angry monkey wearing hoodie NFT</h3></a>
                        
                    </div>
                    <div class="div1">
                        <div class="price">$360</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="shop-box">
                <div class="item-box">
                    <div class="item-img" id="img7"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Thug monkey with frizzy hair NFT</h3></a>
                        
                    </div>
                    <div class="div1">
                        <div class="price">$520</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
                <div class="item-box">
                    <div class="item-img" id="img8"></div>
                    <div class="item-desc">
                        <a class="desc" href="#"><h3 class="info">Tounge out monkey with curly tail NFT</h3></a>
                        
                    </div>
                    <div class="div1">
                        <div class="price">$230</div>
                        <button class="buy">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        
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