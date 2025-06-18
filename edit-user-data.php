<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>Edit User Info</title>
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
    </style>
</head>
<body>
  
    <div id="form-container">
        <form method="POST" action="edit-user-data2.php">
            <?php 
                include "config.php";
                $uid = $_GET['uid'];
                echo "<input type='hidden' name='uid' value='$uid'>";
                $sql = "SELECT * FROM user WHERE id = $uid";
                $res = mysqli_query($con,$sql) or die('Query fail');
                while($row = mysqli_fetch_assoc($res)){
            ?>
            
          <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" value="<?php echo $row['first_name'];?>" class="form-control" required  id="fname" name="fname">
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" value="<?php echo $row['last_name'];?>" class="form-control" required  id="lname" name="lname">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="<?php echo $row['email'];?>" class="form-control" required  id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" value="<?php echo $row['username'];?>" class="form-control" required  id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="new-password" class="form-label">New Password</label>
            <input type="text" class="form-control" required  id="new-password" name="new-password">
          </div>
          <div class="mb-3">
            <label for="conf-password" class="form-label">Confirm Password</label>
            <input type="text" class="form-control" required  id="conf-password" name="conf-password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <?php } ?>
        </form>
    </div>
</body>
</html>
