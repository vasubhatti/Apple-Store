<?php 
    include "config.php";

    $pid = $_GET['pid'];
    $uid = $_GET['uid'];

    $sql = "DELETE FROM cart WHERE user_id = $uid AND product_id = $pid";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location: cart.php");
    }
    else{
        echo "can't remove";
    }
?>