<?php
include 'conn.php';
if(isset($_POST['done'])){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];

  $q = "insert into registration(name, email, mobile, password) VALUES ('$name','$email','$mobile','$password')";
  $query = mysqli_query($conn,$q);
  if($q)
        {
           echo "<script>alert('Register Successfully')</script>";
        }
         else
         {
         	echo "<script>alert('Register Error')</script>";
         }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></scriptalert>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><br>
<div class="container">
<button type="btn btn-primary"><a href="display.php">View Data</a></button></div>
    <div class="col-lg-6 m-auto">
     <form method="post">
        <br><div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">Insert Operation</h1>
            </div>

              <lable>Name:</lable>
              <input type="text" name="name" class="form-control" placeholder="Enter your name" required><br>
              <lable>Email:</lable>
              <input type="email" name="email" class="form-control" placeholder="Enter your email" required><br>
              <lable>Mobile:</lable>
              <input type="mobile" name="mobile" class="form-control" placeholder="Enter your mobile" required><br>
              <lable>Password:</lable>
              <input type="password" name="password" class="form-control" placeholder="Enter your password" required><br>
              <button class="btn btn-success" type="submit" name="done">Submit</button>


        </div>
     </form>
    </div>
    
</body>
</html>