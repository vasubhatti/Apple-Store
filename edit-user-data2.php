<?php 
    include "config.php";

    $uid = $_POST['uid'];
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $unm = mysqli_real_escape_string($con,$_POST['username']);
    $newpwd = mysqli_real_escape_string($con,$_POST['new-password']);
    $confpwd = mysqli_real_escape_string($con,$_POST['conf-password']);

    if($newpwd == $confpwd){
        $sql1 = "SELECT username FROM user WHERE username = '$unm'";
        $res1 = mysqli_query($con,$sql1);
        if(mysqli_num_rows($res1)>0){
            echo "<script>alert('Username is alredy taken!Try another.')</script>";
            die();
        }else{
            $sql = "UPDATE user SET first_name = '$fname',last_name = '$lname',email = '$email',username = '$unm',password = '$confpwd' WHERE id = $uid";
            $res = mysqli_query($con,$sql);
            if($res){
            header("location: user.php");
            }
            else{
                echo "can't update";
            }
        }
    }else{
        echo "<script>alert('New and Confirm password must be same.')</script>";
    }
?>