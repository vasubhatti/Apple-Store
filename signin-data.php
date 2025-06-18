<?php 
    include "config.php";

    $unm = mysqli_real_escape_string($con,$_POST['username']);
    $pwd = $_POST['password'];


    $sql = "SELECT id, username, role,first_name FROM user where username = '{$unm}' AND password = '{$pwd}';";

    $result = mysqli_query($con,$sql) or die("Query Failed");

    if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION['username'] = $row["username"];
    $_SESSION['user_id'] = $row["id"];
    $_SESSION['user_role'] = $row["role"];
    $_SESSION['fname'] = $row["first_name"];
    header("location: index.php");
    }
}
else {
    echo "<script>alert('Username or Password is incorrect.')</script>";
}
?>