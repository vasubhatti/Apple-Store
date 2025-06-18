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
    <title>Accessories</title>
    <link rel="stylesheet" href="./css/accessories.css">
</head>
<body>
    <?php
        include_once "header.php";
    ?>
    <div class="banner-container">
        <div class="banner-div acc-container">
            <div class="banner-text">
                <h1>Accessorise in a snap.</h1>
                <p>Find a MagSafe case, wallet or charger that’s right for you.</p>
                <a href="">Shop MagSafe ></a>
            </div>
            <div class="banner-img"></div>
        </div>
    </div>
    <div class="search-div">
        <h3>Find the accessories you’re looking for.</h3>
        <form action="search.php" method="GET">
            <div class="search-inputs container">
                <input type="text" name="search" class="form-control search" placeholder="Search Accessories">
            </div>
        </form>
    </div>
    <div class="category-container container">
        <h3>Browse by category.</h3>
        <div class="category-wrapper">
            <div class="category">
                <a href="#Mac-Accessories">
                    <ion-icon name="laptop-outline" class="cicon"></ion-icon> 
                    <p style="font-size:1.2rem;">Mac</p>
                </a>
            </div>
            <div class="category">
                <a href="#iPad-Accessories">
                    <ion-icon name="tablet-portrait-outline" class="cicon"></ion-icon>
                    <p style="font-size:1.2rem;">iPad</p>
                </a>
            </div>
            <div class="category">
                <a href="#iPhone-Accessories">
                    <ion-icon name="phone-portrait-outline" class="cicon"></ion-icon>
                    <p style="font-size:1.2rem;">iPhone</p>
                </a>
            </div>
        </div>
    </div>

<div class="accessories-container" id="iPhone-Accessories">
    <h1>Featured iPhone Accessories</h1>
    <div class="accessories acc-container">
        <i class="fa-solid fa-angle-left scroll-btn" id="prevBtn"></i>
        <div class="acc-wrapper">
             <?php 
                include "config.php";

                $sql = "SELECT p.p_id, p.title, p.description, p.image1, p.price, p.main, c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'iPhone-Accessories' AND p.main = 1";

                $res = mysqli_query($con,$sql) or die("Query Failed : select");

                while($row = mysqli_fetch_assoc($res)){
            ?>
            <div class="accesorie">
                <div class="img-div">
                    <a href="single-product.php?pid=<?php echo $row['p_id'];?>&?title=<?php echo $row['title'];?>"><img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row['image1'];?>" alt=""></a>
                </div>
                <h5 class="title"><?php echo $row['description'];?></h5>
                <p class="price">&#8377;<?php echo $row['price'];?></p>
                <a href="single-product.php?pid=<?php echo $row['p_id'];?>&?title=<?php echo $row['title'];?>" class="btn btn-primary">Buy Now</a>
            </div>
            <?php } ?>
        </div>
        <i class="fa-solid fa-angle-right scroll-btn" id="nextBtn"></i>
    </div>
</div>
<!-- ######################################################## -->
<div class="accessories-container" id="iPad-Accessories">
    <h1>Featured iPad Accessories</h1>
    <div class="accessories acc-container">
        <i class="fa-solid fa-angle-left scroll-btn" id="prevBtn1"></i>
        <div class="acc-wrapper" id="acc-wrapper1">
             <?php 
                include "config.php";

                $sql1 = "SELECT p.p_id, p.title, p.description, p.image1, p.price, p.main, c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'iPad-Accessories' AND p.main = 1";

                $res1 = mysqli_query($con,$sql1) or die("Query Failed : select");

                while($row1 = mysqli_fetch_assoc($res1)){
            ?>
            <div class="accesorie">
                <div class="img-div">
                    <a href="single-product.php?pid=<?php echo $row1['p_id'];?>&?title=<?php echo $row1['title'];?>"><img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row1['image1'];?>" alt=""></a>
                </div>
                <h5 class="title"><?php echo $row1['description'];?></h5>
                <p class="price">&#8377;<?php echo $row1['price'];?></p>
                <a href="single-product.php?pid=<?php echo $row1['p_id'];?>&?title=<?php echo $row1['title'];?>" class="btn btn-primary">Buy Now</a>
            </div>
            <?php } ?>
        </div>
        <i class="fa-solid fa-angle-right scroll-btn" id="nextBtn1"></i>
    </div>
</div>
<!-- ################################################### -->
 <div class="accessories-container" id="Mac-Accessories">
    <h1>Featured Mac Accessories</h1>
    <div class="accessories acc-container">
        <i class="fa-solid fa-angle-left scroll-btn" id="prevBtn2"></i>
        <div class="acc-wrapper" id="acc-wrapper2">
             <?php 
                include "config.php";

                $sql2 = "SELECT p.p_id, p.title, p.description, p.image1, p.price, p.main, c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'Mac-Accessories' AND p.main = 1";

                $res2 = mysqli_query($con,$sql2) or die("Query Failed : select");

                while($row2 = mysqli_fetch_assoc($res2)){
            ?>
            <div class="accesorie">
                <div class="img-div">
                    <a href="single-product.php?pid=<?php echo $row2['p_id'];?>&?title=<?php echo $row2['title'];?>"><img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row2['image1'];?>" alt=""></a>
                </div>
                <h5 class="title"><?php echo $row2['description'];?></h5>
                <p class="price">&#8377;<?php echo $row2['price'];?></p>
                <a href="single-product.php?pid=<?php echo $row2['p_id'];?>&?title=<?php echo $row2['title'];?>" class="btn btn-primary">Buy Now</a>
            </div>
            <?php } ?>
        </div>
        <i class="fa-solid fa-angle-right scroll-btn" id="nextBtn2"></i>
    </div>
</div>
<!-- ################################################### -->
 <div class="accessories-container">
    <h1>Sound Essentials</h1>
    <div class="accessories acc-container">
        <i class="fa-solid fa-angle-left scroll-btn" id="prevBtn3"></i>
        <div class="acc-wrapper" id="acc-wrapper3">
             <?php 
                include "config.php";

                $sql2 = "SELECT p.p_id, p.title, p.description, p.image1, p.price, p.main, c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'Airpods' AND p.main = 1";

                $res2 = mysqli_query($con,$sql2) or die("Query Failed : select");

                while($row2 = mysqli_fetch_assoc($res2)){
            ?>
            <div class="accesorie">
                <div class="img-div">
                    <a href="single-product.php?pid=<?php echo $row2['p_id'];?>&?title=<?php echo $row2['title'];?>"><img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row2['image1'];?>" alt=""></a>
                </div>
                <h5 class="title"><?php echo $row2['title'];?></h5>
                <p class="price">&#8377;<?php echo $row2['price'];?></p>
                <a href="single-product.php?pid=<?php echo $row2['p_id'];?>&?title=<?php echo $row2['title'];?>" class="btn btn-primary">Buy Now</a>
            </div>
            <?php } ?>
        </div>
        <i class="fa-solid fa-angle-right scroll-btn" id="nextBtn3"></i>
    </div>
</div>
<!-- ################################################### -->
 <div class="accessories-container">
    <h1>AirTag</h1>
    <div class="accessories acc-container">
        <i class="fa-solid fa-angle-left scroll-btn" id="prevBtn4"></i>
        <div class="acc-wrapper" id="acc-wrapper4">
             <?php 
                include "config.php";

                $sql2 = "SELECT p.p_id, p.title, p.description, p.image1, p.price, p.main, c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'AirTag' AND p.main = 1";

                $res2 = mysqli_query($con,$sql2) or die("Query Failed : select");

                while($row2 = mysqli_fetch_assoc($res2)){
            ?>
            <div class="accesorie">
                <div class="img-div">
                    <a href="single-product.php?pid=<?php echo $row2['p_id'];?>&?title=<?php echo $row2['title'];?>"><img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row2['image1'];?>" alt=""></a>
                </div>
                <h5 class="title"><?php echo $row2['description'];?></h5>
                <p class="price">&#8377;<?php echo $row2['price'];?></p>
                <a href="single-product.php?pid=<?php echo $row2['p_id'];?>&?title=<?php echo $row2['title'];?>" class="btn btn-primary">Buy Now</a>
            </div>
            <?php } ?>
        </div>
        <i class="fa-solid fa-angle-right scroll-btn" id="nextBtn4"></i>
    </div>
</div>
<section class="incentive">
        <div class="last-con">

            <h1>Apple Benefits.</h1>
             <div class="squares">
             <i class="fa-solid fa-angle-left prevBtn" id="prevBtn11"></i>
            <div id="inc-wrapper">
                <div class="inc-card">
                    <i class="fa-solid fa-mobile-screen i-upper"></i>
                    <h3>Save with Apple Trade In.</h3>
                    <p>Get ₹17000.00–₹67500.00 in credit towards iPhone 16 or iPhone 16 Pro when you trade in iPhone 12 or higher.13</p>
                    <i class="fa-solid fa-square-plus i-lower"></i>
                </div>
                <div class="inc-card">
                    <i class="fa-regular fa-credit-card i-upper"></i>
                    <h3>Monthly payment options are available.</h3>
                    <p>Choose the easy way to finance with convenient monthly payment options.</p>
                    <i class="fa-solid fa-square-plus i-lower"></i>
                </div>
                <div class="inc-card">
                    <i class="fa-solid fa-truck i-upper"></i>
                    <h3>Get flexible delivery and easy pickup.</h3>
                    <p>Get free delivery or pickup at your Apple Store.</p>
                    <i class="fa-solid fa-square-plus i-lower"></i>
                </div>
                <div class="inc-card">
                    <i class="fa-solid fa-id-card i-upper"></i>
                    <h3>Shop one-to-one with a Specialist.</h3>
                    <p>Online or in a store.</p>
                    <i class="fa-solid fa-square-plus i-lower"></i>
                </div>
                <div class="inc-card">
                    <i class="fa-solid fa-users i-upper"></i>
                    <h3>Join an online Personal Setup session.</h3>
                    <p>Talk one-to-one with a Specialist to set up your iPhone and discover new features.</p>
                    <i class="fa-solid fa-square-plus i-lower"></i>
                </div>
                <div class="inc-card">
                    <i class="fa-solid fa-cart-shopping i-upper"></i>
                    <h3>Explore a shopping experience designed around you.</h3>
                    <p>Use the Apple Store app to get a more personal way to shop.</p>
                    <i class="fa-solid fa-square-plus i-lower"></i>
                </div>
            </div>
            <i class="fa-solid fa-angle-right nextBtn" id="nextBtn11"></i>
            </div>
        </div>
    </section>
        <?php 
            include_once "footer.php";
        ?>
    <script>
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const slider = document.querySelector(".acc-wrapper");
        
        const prevBtn1 = document.getElementById("prevBtn1");
        const nextBtn1 = document.getElementById("nextBtn1");
        const slider1 = document.getElementById("acc-wrapper1");

        const prevBtn2 = document.getElementById("prevBtn2");
        const nextBtn2 = document.getElementById("nextBtn2");
        const slider2 = document.getElementById("acc-wrapper2");

        const prevBtn3 = document.getElementById("prevBtn3");
        const nextBtn3 = document.getElementById("nextBtn3");
        const slider3 = document.getElementById("acc-wrapper3");

        const prevBtn4 = document.getElementById("prevBtn4");
        const nextBtn4 = document.getElementById("nextBtn4");
        const slider4 = document.getElementById("acc-wrapper4");

        const prevBtn11 = document.getElementById("prevBtn11");
        const nextBtn11 = document.getElementById("nextBtn11");
        const slider11 = document.getElementById("inc-wrapper");

        prevBtn.addEventListener("click", () => {
        slider.scrollBy({ left: -300, behavior: "smooth" });
        });
        nextBtn.addEventListener("click", () => {
        slider.scrollBy({ left: 300, behavior: "smooth" });
        });

        prevBtn1.addEventListener("click", () => {
        slider1.scrollBy({ left: -300, behavior: "smooth" });
        });
        nextBtn1.addEventListener("click", () => {
        slider1.scrollBy({ left: 300, behavior: "smooth" });
        });

        prevBtn2.addEventListener("click", () => {
        slider2.scrollBy({ left: -300, behavior: "smooth" });
        });
        nextBtn2.addEventListener("click", () => {
        slider2.scrollBy({ left: 300, behavior: "smooth" });
        });

        prevBtn3.addEventListener("click", () => {
        slider3.scrollBy({ left: -300, behavior: "smooth" });
        });
        nextBtn3.addEventListener("click", () => {
        slider3.scrollBy({ left: 300, behavior: "smooth" });
        });

        prevBtn4.addEventListener("click", () => {
        slider4.scrollBy({ left: -300, behavior: "smooth" });
        });
        nextBtn4.addEventListener("click", () => {
        slider4.scrollBy({ left: 300, behavior: "smooth" });
        });

         nextBtn11.addEventListener("click", () => {
            slider11.scrollBy({ left: 327, behavior: "smooth" });
        });

        prevBtn11.addEventListener("click", () => {
        slider11.scrollBy({ left: -327, behavior: "smooth" });
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>