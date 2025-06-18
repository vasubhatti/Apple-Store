<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>Document</title>
    <link rel="stylesheet" href="./css/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="products">
        <h1>Explore the line-up.</h1>
        <div id="product-wrapper">
            <div class="product">
                <div class="pro-img">
                    <img loading="lazy" decoding="async" fetchpriority="high" src="./img/male.jpg" alt="">
                </div>
                <h2 class="pro-title">iPhone 16 Pro</h2>
                <p class="pro-desc">The ultimate iPhone.</p>
                <p class="pro-price">From ₹119900.00*or ₹9825.00/mo. for 12 mo.</p>
                <a href="#" class="buy-btn">Buy Now</a>
            </div>
            <div class="product">
                <div class="pro-img">
                    <img loading="lazy" decoding="async" fetchpriority="high" src="./img/male.jpg" alt="">
                </div>
                <h2 class="pro-title">iPhone 16 Pro</h2>
                <p class="pro-desc">The ultimate iPhone.</p>
                <p class="pro-price">From ₹119900.00*or ₹9825.00/mo. for 12 mo.</p>
                <a href="#" class="buy-btn">Buy Now</a>
            </div>
            <div class="product">
                <div class="pro-img">
                    <img loading="lazy" decoding="async" fetchpriority="high" src="./img/male.jpg" alt="">
                </div>
                <h2 class="pro-title">iPhone 16 Pro</h2>
                <p class="pro-desc">The ultimate iPhone.</p>
                <p class="pro-price">From ₹119900.00*or ₹9825.00/mo. for 12 mo.</p>
                <a href="#" class="buy-btn">Buy Now</a>
            </div>
            <div class="product">
                <div class="pro-img">
                    <img loading="lazy" decoding="async" fetchpriority="high" src="./img/male.jpg" alt="">
                </div>
                <h2 class="pro-title">iPhone 16 Pro</h2>
                <p class="pro-desc">The ultimate iPhone.</p>
                <p class="pro-price">From ₹119900.00*or ₹9825.00/mo. for 12 mo.</p>
                <a href="#" class="buy-btn">Buy Now</a>
            </div>
            <div class="product">
                <div class="pro-img">
                    <img loading="lazy" decoding="async" fetchpriority="high" src="./img/male.jpg" alt="">
                </div>
                <h2 class="pro-title">iPhone 16 Pro</h2>
                <p class="pro-desc">The ultimate iPhone.</p>
                <p class="pro-price">From ₹119900.00*or ₹9825.00/mo. for 12 mo.</p>
                <a href="#" class="buy-btn">Buy Now</a>
            </div>
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
</body>
</html>