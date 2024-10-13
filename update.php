<?php
include'conn.php';
if(isset($_POST['done'])){
    
    $id =$_GET['id'];
    $name =$_POST['name'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];

  $q = "update registration set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
  $query = mysqli_query($conn,$q);
  header('location:display.php');
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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">
     <form method="post">
        <br><div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">Update Operation</h1>
            </div>

              <lable>Name:</lable>
              <input type="text" name="name" class="form-control"><br>
              <lable>Email:</lable>
              <input type="email" name="email" class="form-control"><br>
              <lable>Mobile:</lable>
              <input type="mobile" name="mobile" class="form-control"><br>
              <lable>Password:</lable>
              <input type="password" name="password" class="form-control"><br>
              <button class="btn btn-success" type="submit" name="done">Submit</button>


        </div>
     </form>
    </div>
    
</body>
</html>