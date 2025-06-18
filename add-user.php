<?php 
    include "config.php";

    $fnm = mysqli_real_escape_string($con,$_POST['fname']);
    $lnm = mysqli_real_escape_string($con,$_POST['lname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $unm = mysqli_real_escape_string($con,$_POST['username']);
    $pwd = $_POST['password'];
    $user_role = $_POST['user_role'];

    $sql = "SELECT username FROM user WHERE username = '$unm'";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<script>alert('Username is alredy taken!Try another.')</script>";
        die();
    }else{

    $sql1 = "INSERT INTO user(first_name,last_name,email,username,password,role) VALUES ('{$fnm}','{$lnm}','{$email}','{$unm}','{$pwd}','{$user_role}');";
    $res1 = mysqli_query($con,$sql1) or die("Query Failed ");
    if($res1)
    {
        echo "<script>alert('Inserted')</script>";
        header("location: signin.php");
    }
    else{
        echo "<script>alert(' Not Inserted')</script>";
    }
}
?>