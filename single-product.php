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

        $p_id = $_GET['pid'];

        $qry = "SELECT title FROM product WHERE p_id = $p_id";
        $data = mysqli_query($con,$qry) or die("Can't fetch pro-details.");
        $ptitle = mysqli_fetch_assoc($data);
        echo "<title>{$ptitle['title']}</title>";
    ?>
    
    <link rel="stylesheet" href="./css/single-pro.css">
</head>
<body>
    <?php 
        include "header.php";
    ?>
<div class="pro-info container">
    <?php 
        include "config.php";

        $pid = $_GET['pid'];

        $sql = "SELECT * FROM product WHERE p_id = $pid";
        $res = mysqli_query($con,$sql) or die("Can't fetch pro-details.");
        while($row = mysqli_fetch_assoc($res)){

    ?>
    <div class="pro-cor content-1">
        <h1 style="margin:1rem 0;"><?php echo $row['title'];?></h1>
        <div class="pro-images">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image1'];?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image2'];?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image3'];?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="content-2">
        <p><?php echo $row['description'];?></p>
        
        <h4><?php echo "&#8377;".$row['price'];?></h4>
        <form id="myForm" action="add-to-cart.php" method="POST">
        <b>Qty :<b> &nbsp;&nbsp;&nbsp;<input  value="1" type="number" name="qty" id="qty"><br><br>
         <input type="hidden" name="pid" value="<?php echo $row['p_id'];?>">
        <a href="add-to-cart.php?" id="submitBtn" class="buy-btn">Add to Cart</a>
        </form>

<script>
  document.getElementById('submitBtn').addEventListener('click', function(event) {
    event.preventDefault(); // prevent anchor default action
    document.getElementById('myForm').submit(); // submit form using POST
  });
</script>
        <!-- <a class="btn btn-primary">Add to Cart</a> -->
        <?php } ?>
        <div class="options">
            
            <h5>Colour Options :</h5>
            <div class="option-container">
                <?php 
                include "config.php";

                $sql1 = "SELECT * FROM product WHERE p_id = $pid";
                $res1 = mysqli_query($con,$sql1);
                $row1 = mysqli_fetch_assoc($res1);

                $sql2 = "SELECT * FROM product WHERE title = '{$row1['title']}'";
                $res2 = mysqli_query($con,$sql2);
                while($row2 = mysqli_fetch_assoc($res2)){
            ?>
                <div class="option">
                    <a href="single-product.php?pid=<?php echo $row2['p_id'];?>">
                        <?php 
                            if($pid == $row2['p_id']){
                                echo "<div class='opt-img active-pro'>";
                            }
                            else{
                                echo "<div class='opt-img'>";
                            }
                        ?> 
                        
                            <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row2['image1'];?>" alt="">
                        </div>
                        <h6><?php echo $row2['color'];?></h6>
                    </a> 
                </div>
                <?php } ?>
            </div>
            
        </div>
    </div>
    
</div>
    <?php 
    $sql3 = "SELECT * FROM product WHERE p_id = $pid";
    $res3 = mysqli_query($con,$sql3);
    while($row3 = mysqli_fetch_assoc($res3)){
        
        ?>
    <section class="about container">
        <h2>About <?php echo $row3['title'];?></h2>
        <p><?php echo $row3['about'];?></p>
        <h2>Product Images</h2>
    <div class="img-gallary">
        <div class="pro_img">
            <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row3['image1'];?>" alt="">
        </div>
        <div class="pro_img">
            <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row3['image2'];?>" alt="">
        </div>
        <div class="pro_img">
            <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row3['image3'];?>" alt="">
        </div>
    </div>
    </section>
    <?php } ?>
        <!-- ################3######### -->
    <div id="products">
        <h1>Other Items ></h1>
        <div id="product-wrapper">
            <?php 
                include "config.php";
                $pid = $_GET['pid'];

                // $sql = "SELECT p.p_id,p.title,p.description,p.image1,p.price,p.main,c.category_name FROM product p JOIN category c WHERE c.category_name = 'iPhone' AND p.main = 1 AND p_id != $pid";
                $sql = "SELECT * FROM product WHERE p_id != $pid AND main = 1 ORDER BY RAND() LIMIT 5 ";

                $res = mysqli_query($con,$sql) or die("Query Failed : select");

                while($row = mysqli_fetch_assoc($res)){
            ?>
            <div class="product">
                <div class="pro-img">
                    <a href="single-product.php?pid=<?php echo $row['p_id'];?>&?title=<?php echo $row['title'];?>"><img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image1'];?>" alt=""></a>
                </div>
                <h2 class="pro-title"><?php echo $row['title'];?></h2>
                <p class="pro-desc"><?php echo substr($row['description'],0,50)."...";?></p>
                <p class="pro-price"><?php echo "&#8377;".$row['price'];?></p>
                <a href="single-product.php?pid=<?php echo $row['p_id'];?>&?title=<?php echo $row['title'];?>" class="buy-btn">Buy Now</a>
            </div>
            <?php } ?>
        </div>
        <div class="scroll-btns">
                <button onclick="Left()" class="btn btn-primary btn-scrl"> << </button>
                <button onclick="scrollRight()" class="btn btn-primary btn-scrl"> >> </button>
        </div>
                </div>
    </div>
    <?php include_once "footer.php";?>
    <script>
        function Left(){
            document.getElementById("product-wrapper").scrollBy({
                left: -320,behavior:'smooth'
            });
        }
        function scrollRight(){
            document.getElementById("product-wrapper").scrollBy({
                left: 320,behavior:'smooth'
            });
        }
    </script>
    
</body>
</html>