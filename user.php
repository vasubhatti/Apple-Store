<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>User Info</title>
    <link rel="stylesheet" href="./css/user.css">
</head>
<body>  
   <div class="user-div container">
        <div class="user-icon">
            <i class="fa-solid fa-user"></i>
        </div>
        <?php 
            include "config.php";
            session_start();
            if(isset($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $sql = "SELECT * FROM user WHERE id = $id";
            $res = mysqli_query($con,$sql) or die("Query Failed.");
            $row = mysqli_fetch_assoc($res); 
        ?>
        <h3><?php echo $row['first_name']." ".$row['last_name'];?></h3>
   </div>
   <div class="personal-info container">
        <div class="info-header">
            <p>Personal Informatin</p>
            <i class="fa-solid fa-angle-up"></i>
        </div>
        <div class="info">
            <p>First Name</p>
            <div class="content">
                <p><?php echo $row['first_name'];?></p>
            </div>
            <p>Last Name</p>
            <div class="content">
                <p><?php echo $row['last_name'];?></p>
            </div>
            <p>Email</p>
            <div class="content">
                <p><?php echo $row['email'];?></p>
            </div>
            <p>Username</p>
            <div class="content">
                <p><?php echo $row['username'];?></p>
            </div>
            <div>
                <a href="edit-user-data.php?uid=<?php echo $row['id'];?>" class="btn btn-dark">Edit</a>
            </div>
        </div>
        <?php } ?>
   </div>  
    <div class="container">
        <a href="cart.php" class="view-cart">
            <p><i class="fa-solid fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;View Cart</p>
            <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>
    <div class="container">
        <div class="admin-header">
            <p>Admin Features</p>
            <i class="fa-solid fa-angle-down"></i>
        </div>
        <div class="admin">
        <?php 
            if($_SESSION['user_role'] == 1){
                echo "<a href='add-product.php'>Add Product ></a><br>";
            }
            else{
                echo "<p>You are not admin user!</p>";
            }
        ?>
            
        </div>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Keep Shopping ></a>
    </div>
    <div class="container">
        <a href="sign-out.php" class="btn btn-danger">Sign Out</a>
    </div>
   <script src="jquery.js"></script>
   <script>
    $(document).ready(function(){
        $(".info-header").click(function(){
            $(".info").slideToggle('fast');
            $(".info-header i").toggleClass("fa-angle-down") ;
            $(".info-header i").toggleClass("fa-angle-up") ;
        });
        $(".admin-header").click(function(){
            $(".admin").slideToggle('fast');
            $(".admin-header i").toggleClass("fa-angle-down") ;
            $(".admin-header i").toggleClass("fa-angle-up") ;
        });
    });
   </script>
</body>
</html>