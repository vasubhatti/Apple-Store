<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <header>
        <nav>
            <div class="container wrapper">
                <div>
                    <img src="./img/logo.png" alt="">
                </div>
                <div class="list-items">
                    <a href="index.php">Store</a>
                    <a href="iphone.php">iPhone</a>
                    <a href="ipads.php">iPads</a>
                    <a href="macbook.php">Mac</a></li>
                    <a href="airpods.php">AirPods</a>
                    <a href="accessories.php">Accessories</a>  
                </div>
                <div>
                    <i class="fa-solid fa-search"></i>
                    <a href="cart.php"><i class="fa-solid fa-shopping-cart cart-icon"></i></a>
                    <i class="fa-solid fa-user user-icon"></i>
                    <i class="fa-solid fa-bars menu-icon" id="menu-icon"></i>
                </div>
            </div>
        </nav>
    </header>
    <div id="menu">
        <div class="menu-wrapper">
            <a href="index.php">Store</a>
            <a href="iphone.php">iPhone</a>
            <a href="ipads.php">iPads</a>
            <a href="macbook.php">Mac</a></li>
            <a href="airpods.php">AirPods</a>
            <a href="accessories.php">Accessories</a>
        </div>
    </div>
    <div class="user-int">
        <?php 
            if(isset($_SESSION['user_id'])){
                include "config.php";
                $id = $_SESSION['user_id'];
                $sql = "SELECT first_name,email FROM user WHERE id = $id";
                $res = mysqli_query($con,$sql) or die("Query Failed");
                while($row = mysqli_fetch_assoc($res)){
        ?>
        <a href="user.php">
            <div class="user-wrapper container">
                <div class="user-container">
                    <div class="user-img">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="user-info">
                    <h4>Hello <?php echo $row['first_name'];?> !</h4>
                    <h6><?php echo $row['email'];?></h6>
                </div>
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </a>
        <div>
        <a href="sign-out.php" class="btn btn-danger">Sign out</a>
        </div>
        <?php }} else { ?>
        
        <!-- ################ -->
        <a href="signin.php">
            <div class="user-wrapper container">
                <div class="user-container">
                    <div class="user-img">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="user-info">
                    <h4>Sign in</h4>
                    <h6></h6>
                </div>
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </a>
        <div>
        <a href="signin.php" class="btn btn-primary">Sign in</a>
        </div>
        <?php }?>
        </div>
    </div>
    <div class="search-container">
        <form action="search.php" method="GET">
            <div class="search-inputs container">
                <input type="text" name="search" class="form-control search" placeholder="Search .....">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function(){
             
            $(".menu-icon").click(function(){
                $(this).toggleClass('active');
                $(this).toggleClass('fa-bars');
                $(this).toggleClass('fa-xmark');
                if($(this).hasClass('active')){
                    $(".menu-wrapper").slideDown('fast');
                }
                else{
                    $(".menu-wrapper").slideUp('fast');
                }
            });
           $(".fa-search").click(function(){
                $(".search-container").slideToggle('fast');
           });
            $(".user-icon").click(function(){
               $(".user-int").toggle();
            }); 
        });
    </script>
</body>
</html>