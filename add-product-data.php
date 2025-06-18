<?php 
    include "config.php";

    $category = $_POST['category'];
    $title = mysqli_real_escape_string($con,$_POST['pro-title']);
    $desc = $_POST['pro-desc'];
    $color = $_POST['color'];
    $disp = $_POST['display'];
    $img1 = $_POST['image1'];
    $img2 = $_POST['image2'];
    $img3 = $_POST['image3'];
    $price = $_POST['price'];
    $main = $_POST['main'];
    $about = mysqli_real_escape_string($con,$_POST['about']);

    $sql = "INSERT INTO product(title,description,color,display,image1,image2,image3,price,main,category,about)
            VALUES ('$title','$desc','$color','$disp','$img1','$img2','$img3','$price',$main,$category,'$about');";
    
    $sql .= "UPDATE category SET products = products + 1 WHERE c_id = $category";

    $res = mysqli_multi_query($con,$sql) or die("Query Failed");

    if($res){
        header("location: add-product.php");
    }
    else{
        echo "Failed";
    }
?>