<?php 
  include "config.php";
  session_start();
  if($_SESSION['user_role'] == 0){
    echo "<script>alert('You are not admin user.')</script>";
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        #form-container{
            max-width:350px;
            padding:2rem;
            border:2px solid #000;
            border-radius:5px;
            /* text-align:center; */
            margin:1rem auto;
        }
        .btn{
            margin-top:10px;
        }
       h1{
        font-size:1.8rem;
        margin-bottom:1rem;
        font-family: "Poppins", sans-serif;
       }
    </style>
</head>
<body>
    <div id="form-container">
    <h1>Add Product</h1>
        <form method="POST" action="add-product-data.php">
          <div class="mb-3">
          <label for="category" class="form-label">* Category</label>
          <select id="category" name="category" class="form-select" aria-label="Default select example">
            <?php 
                include "config.php";

                $sql = "SELECT * FROM category";
                $res = mysqli_query($con,$sql) or die("Query Failed : Category");
                while($row = mysqli_fetch_assoc($res)){
                    echo "<option value='{$row['c_id']}'>{$row['category_name']}</option>";
                }
            ?>
          </select>
            </div>
          <div class="mb-3">
            <labe for="pro-title" class="form-label">* Product Title</label>
            <input type="text" class="form-control"  id="pro-title" name="pro-title">
          </div>
          <div class="mb-3">
            <label for="pro-desc" class="form-label">* Product Description</label>
            <input type="text" class="form-control"  id="pro-desc" name="pro-desc">
          </div>
          <div class="mb-3">
            <label for="color" class="form-label">* Color</label>
            <input type="text" class="form-control"  id="color" name="color">
          </div>
          <div class="mb-3">
            <label for="display" class="form-label"> Display</label>
            <input type="text" class="form-control"  id="display" name="display">
          </div>
          <div class="mb-3">
            <label for="image1" class="form-label">* image1</label>
            <input type="text" class="form-control"  id="image1" name="image1">
          </div>
          <div class="mb-3">
            <label for="image2" class="form-label">* image2</label>
            <input type="text" class="form-control"  id="image2" name="image2">
          </div>
          <div class="mb-3">
            <label for="image3" class="form-label">* image3</label>
            <input type="text" class="form-control"  id="image3" name="image3">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">* Price</label>
            <input type="text" class="form-control"  id="price" name="price">
          </div>
         <div class="mb-3">
          <label for="main" class="form-label">* Status</label>
          <select id="main" name="main" class="form-select" aria-label="Default select example">
            <option value="1">Main</option>
            <option value="0">Color Varient</option>
          </select>
          <div class="mb-3">
            <label for="about" class="form-label">* About</label>
            <input type="text" class="form-control"  id="about" name="about">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
