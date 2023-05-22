<?php
include("classes/User.php");
$u1 = new Users();


$id = $_GET['id'];

if(isset($_GET['id'])){
  $data =  $u1->edit_user($id);  // here $data==$result which is an Object
  $row = mysqli_fetch_assoc($data );     //<!-- $data object convert to Asociative array by mysqli_fetch_assoc($data) method one by one row -->
}

if(isset($_POST['update_user'])){
    $u1->update_user($_POST, $id);
}

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- bootstrap Icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>

  <div class="container">
    
    <div class="row vh-100 align-items-center">
        <div class="col-lg-4 offset-4">
            <!-- form start -->
            <form action="" method="POSt" class="shadow p-4">

                <h3 class="text-danger display-6 text-center mb-3">Update Info</h3>

                <div class="rorm-group mb-3">
                <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required value="<?php echo $row['name']; ?>">
                </div>

                <div class="rorm-group mb-3">
                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required value="<?php echo $row['email']; ?>">
                </div>

                <div class="rorm-group mb-4">
                <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required value="<?php echo $row['password']; ?>">
                </div>

                <div class="rorm-group mb-3">
                <input type="submit" name="update_user" value="Update User" class="btn btn-success w-100">
                </div>
                
                
            </form>
        </div>
    </div>


  </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>