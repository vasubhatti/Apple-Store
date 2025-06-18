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
    <?php
        include "config.php";
        $search_term1 = mysqli_real_escape_string($con,$_GET['search']);
        echo "<title>Search - {$search_term1}</title>";
    ?>
    <title>Document</title>
    <link rel="stylesheet" href="./css/search.css">
</head>
<body>
    <?php include_once "header.php";?>
    <?php 
    
    include "config.php";
    $search_term = mysqli_real_escape_string($con,$_GET['search']);?>
        <h2 class="page-heading">Result for '<?php echo $search_term?>' ></h2>
        <div class="products sec-container">
            <div class="pro-wrapper">
                 <?php 
                        include "config.php";
                        $search_term = mysqli_real_escape_string($con,$_GET['search']);
                        $sql = "SELECT p_id,title,description,image1,price,main FROM product WHERE title LIKE '%{$search_term}%' AND main = 1";
                        $res = mysqli_query($con,$sql) or die("Query Failed");
                        if(mysqli_num_rows($res)>0){
                        while($row  = mysqli_fetch_assoc($res)){ ?>
         
                <div class="product">
                    <div class="pro-img">
                        <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image1'];?>" alt="">
                    </div>
                    <?php 
                        if(strlen($row['title'])>17){
                            echo "<h6 class='title'>".substr($row['title'],0,17)."...</h6>";
                        }
                        else{
                           echo "<h6 class='title'>{$row['title']}</h6>"; 
                        }
                    ?>
                    <p class="desc"><?php echo substr($row['description'],0,20)."...";?></p>
                    <h6 class="price">&#8377;<?php echo $row['price'];?></h6>
                    <a href="single-product.php?pid=<?php echo $row['p_id'];?>" class="btn btn-primary">Buy Now</a>
                </div>
                <?php } } else {?>
            </div>
        </div>
        <p style="font-size:1.4rem;position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);">No result found for '<?php echo $search_term;?>'.</p>
        <?php }?>
</body>
</html>