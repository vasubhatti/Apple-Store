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
    <title>AirPods</title>
    <link rel="stylesheet" href="./css/airpods.css">
</head>
<body>
    <?php 
        include_once "header.php";
    ?>
        <div class="phones"> 
            <div class="sec-container phones-wrapper">
                <?php 
                include "config.php";

                $sql1 = "SELECT p.p_id, p.title,p.image1,c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'AirPods' AND p.main = 1 LIMIT 5";

                $res1 = mysqli_query($con,$sql1) or die("Query Failed : select");

                while($row1 = mysqli_fetch_assoc($res1)){
            ?>
                <div class="single-phone">
                    <a href="single-product.php?pid=<?php echo $row1['p_id'];?>">
                    <div class="phone">
                        <img loading="lazy" decoding="async" fetchpriority="high" src="<?php echo $row1['image1'];?>" alt="">
                    </div>
                        <?php 
                        if(strlen($row1['title'])>17){
                            echo "<p>".substr($row1['title'],0,17)."...</p>";
                        }
                        else{
                           echo "<p>{$row1['title']}</p>"; 
                        }
                    ?>
                    </a>
                </div>
                <?php } ?>
            </div>       
        </div>
    <div style="background-color : #f5f5f7;text-align:center; ">
      <p style="padding:.5rem;font-size:.9rem;" class="sec-container">Delight your loved ones with perfect gifts from our store.&nbsp;<a href="index.php" style="text-decoration:none;">Store ></a></p>
    </div>
   
        <div id="intro" class="sec-container">
            <h1>AirPods</h1>
            <h4>The next evolution of <br>sound and comfort.</h4>
        </div>
        <div id="video-container" class="sec-container">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bCqnOn23LWE?si=_JyreEmzmNBAk_GY&autoplay=1&mute=1&controls=0&loop=1&playsinline=1&rel=0&playlist=bCqnOn23LWE&end=37" title="YouTube video player" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    <div id="square-container" class="sec-container">
        <h1>Get to know AirPods</h1>
        <div class="squares">
        <i class="fa-solid fa-angle-left prevBtn"></i>
        <div id="square-wrapper">
            <div class="square-card card-1">
                <h6>Active Noise Cancellation</h6>
                <h4>Control what you hear. And what you don’t.</h4>
            </div>
            <div class="square-card card-2">
                <h6>Personalised Spatial Audio</h6>
                <h4>Immersive sound. Fine‑tuned to you.</h4>
            </div>
            <div class="square-card card-3">
                <h6>Hearing Health</h6>
                <h4>Minimise your exposure to loud noise.</h4>
            </div>
            <div class="square-card card-5">
                <h6>Magical Experience</h6>
                <h4>Simply effortless.</h4>
            </div>
        </div>
        <i class="fa-solid fa-angle-right nextBtn"></i>
        </div>
        
    </div>
    <!-- ######### PRODUCTS ######### -->
        <div id="products">
        <h1>Which AirPods are <br>right for you?</h1>
        <div id="product-wrapper">
            <?php 
                include "config.php";

                $sql = "SELECT p.p_id, p.title, p.description, p.image1, p.price, p.main, c.category_name FROM product p JOIN category c ON p.category = c.c_id WHERE c.category_name = 'AirPods' AND p.main = 1";

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
        <!-- ############################ -->
    <section class="incentive">
        <div class="sec-container">

            <h1>Why Apple is the best<br>place to buy AirPods.</h1>
             <div class="squares">
             <i class="fa-solid fa-angle-left prevBtn" id="prevBtn1"></i>
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
            <i class="fa-solid fa-angle-right nextBtn" id="nextBtn1"></i>
            </div>
        </div>
    </section>
    <?php include_once "footer.php";?>
    <script>
        const slider = document.querySelector("#square-wrapper");
        const slider1 = document.querySelector("#inc-wrapper");
        const prevBtn = document.querySelector(".prevBtn");
        const nextBtn = document.querySelector(".nextBtn");
        const prevBtn1 = document.getElementById("prevBtn1");
        const nextBtn1= document.getElementById("nextBtn1");

        nextBtn.addEventListener("click", () => {
            slider.scrollBy({ left: 302, behavior: "smooth" });
     });

        prevBtn.addEventListener("click", () => {
        slider.scrollBy({ left: -302, behavior: "smooth" });
        });
        
        nextBtn1.addEventListener("click", () => {
            slider1.scrollBy({ left: 327, behavior: "smooth" });
        });

        prevBtn1.addEventListener("click", () => {
        slider1.scrollBy({ left: -327, behavior: "smooth" });
        });

    </script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>