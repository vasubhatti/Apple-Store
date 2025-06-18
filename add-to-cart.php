<?php 
    include "config.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        $uid = $_SESSION['user_id'];
        $pid = $_POST['pid'];
        $qty = $_POST['qty'];

        $sql = "INSERT INTO cart(user_id,product_id,quantity) VALUES ({$uid},{$pid},{$qty})";
        $res = mysqli_query($con,$sql)or die("Query Faile");
       if($res){
    echo "<script>alert('Your Product is successfully added!'); window.location.href='single-product.php?pid={$pid}';</script>";
} else {
    echo "<h1>Please sign in first!</h1>";
}
    }
    else{
        echo "<h1 style='font-family:Ariel,sans-serif;font-size:2.5rem;padding:1rem;'>You are not signed in. Please sign in first.</h1>";
    }
?>