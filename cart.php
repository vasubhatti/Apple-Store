<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>Your Shopping Cart</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=production_quantity_limits" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
    <?php include_once "header.php";?>
    <div class="cart-items container">
        <h3>Your Shopping Cart </h3>
        <div>
            
            <div class="cart-wrapper">
                <?php 
                    include "config.php";
                    // session_start();
                    if(isset($_SESSION['user_id'])){
                        $uid = $_SESSION['user_id'];
                        $sql = "SELECT c.cart_id,c.user_id,c.product_id,c.quantity,p.p_id,p.title,p.image1,p.price FROM cart c JOIN product p ON c.product_id = p.p_id WHERE c.user_id = $uid ORDER BY c.cart_id DESC";
                        $res = mysqli_query($con,$sql) or die("Query Failed :select");
                        if(mysqli_num_rows($res)>0){
                            while($row = mysqli_fetch_assoc($res)){
                        
                ?>
                <div class="item">
                    <div class="cart-img">
                        <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image1'];?>" alt="">
                    </div>
                    <h5 class="title"><?php echo $row['title'];?></h5>
                    <h6 class="price">&#8377;<?php echo $row['price'];?></h6>
                    <h6>Qty:<?php echo $row['quantity'];?></h6>
                    <div class="cart-btns">
                        <a href="single-product.php?pid=<?php echo $row['p_id'];?>" class="btn btn-primary view-btn">View</a>
                        <a href="remove-cart-item.php?pid=<?php echo $row['p_id'];?>&uid=<?php echo $row['user_id'];?>" class="btn btn-danger remove-btn">Remove</a>
                    </div>
                </div>
                <?php }}else {?>
            </div>
        </div>
    </div>
    
    <div class="empty-cart">
        <span class="material-symbols-outlined">
            production_quantity_limits
        </span>
        <p style="font-size:1.2rem;width:100%;">Your cart is empty.</p>
    </div>
    <?php }  } else {?>
    <div class="not-sign-in">
       <i class="fa-solid fa-user-xmark"></i>
       <p style="margin:1rem 0;">You are not signed in. Please Sign In First.</p>
    </div>
    <?php } ?>
</body>
</html>