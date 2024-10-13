<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><br>
<div class="container"><button type="button"><a href="insert.php">Back</a></div>
<div class="container">
    <div class="col-lg-12"><br><br>
        <h1 class="text-white bg-dark text-center">Display Table Data</h1><br>
        <table class="table table-striped table-hover table-bordered">
            
        <tr class="bg-dark text-white text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th colspan="2">Operation</th>
            </tr>

<?php
include 'conn.php';
  $q = "select * from registration";
  $num=1;
  $query = mysqli_query($conn,$q);
  while($res = mysqli_fetch_array($query)){
 
?>

          <tr class="text-center">
                <!-- <td><?php echo $res['id']; ?></td> -->
                <td><?php echo $num; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                <td><?php echo $res['password']; ?></td>
                <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>" onclick="return confirm('Are you want to delete this data');" class="text-white"> delete</a></button></td>
                <td><button class="btn btn-primary"><a href="update.php?id=<?php echo $res['id'];?>" onclick="return confirm('Are you want to update this data');" class="text-white"> update</a></button></td>

            </tr>
            <?php
            $num++;
  }
  ?>
        
        </table>
    </div>
</div>
    
</body>
</html>