<?php
include("classes/User.php");
$u1 = new Users();

if(isset($_POST["add_user"])){

  $u1->add_user($_POST);

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
    <div class="row mb-4">
        <div class="col-12">
        <h1 class="bg-danger text-center py-4 display-2 text-light">CRUD Operation</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <!-- form start -->
            <form action="" method="POSt" class="shadow p-4">

                <h3 class="text-danger display-4 text-center mb-3">User Info</h3>

                <div class="rorm-group mb-3">
                <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
                </div>

                <div class="rorm-group mb-3">
                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
                </div>

                <div class="rorm-group mb-4">
                <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>
                </div>

                <div class="rorm-group mb-3">
                <input type="submit" name="add_user" value="Add User" class="btn btn-dark w-100">
                </div>
                
                
            </form>
        </div>

        <div class="col-lg-8">
            <!-- Table start -->
            <table class="table table-striped">
                <tr class="text-center">
                    <th >#SL.No</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Password</th>
                    <th>Action</th>
                </tr>

                <?php
                
                 $data = $u1->show_user(); // here $data==$result which is an Object
                 $i=1; // for index or serial maintain
                
                 while($row = mysqli_fetch_assoc($data)){?>     <!-- $data object convert to array by mysqli_fetch_assoc($data) method one by one -->
                  <tr class="text-center">
                    <td><?php echo $i++?></td> <!-- ecoh $row['id'] for original index -->
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['password']?></td>
                    <td>
                      <a href="" class="btn btn-danger"><i class="bi-trash-fill"></i></a>
                      <a href="" class="btn btn-primary"><i class="bi-pencil-fill"></i></a>
                    </td>
                 </tr>

              <?php   }

                ?>
              
            </table>
        </div>
    </div>


  </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>