<?php 
     include("classes/FruitsManager.php");
     $t1 = new FruitsManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $data = $t1->edit($id);
        $row = mysqli_fetch_assoc($data);
     }

     if(isset($_POST['upd_fruit'])){
        $t1->update($_POST, $id);
     }

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/all.min.css">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
<!-- navbar part -->
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Amar Product</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Mobile</a>
        <a class="nav-link" href="#">Laptop</a>
        <a class="nav-link" href="#">Sports</a>
      </div>
    </div>
  </div>
</nav>

<!-- body part -->
<div class="container vh-100">
    <div class="row">
        <div class="col-lg-8 offset-2">
      
            <div class="addTask">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h2 class="display-5 text-primary text-center">Update Fruits</h2>

                        <!-- Display Message -->
                        <?php 

                            if(isset($_SESSION['message'])){?>

                                <div class="alert alert-<?php echo $_SESSION['type']?> alert-dismissible fade show" role="alert">

                                <?php echo $_SESSION['message'];?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            <?php
                                    unset($_SESSION['message']);
                            }
                        ?>

                        <div class="form-group mb-3">
                            <input type="text" name="new_fruitName" id="addTask" placeholder="Enter Fruits Name" class="form-control" value="<?php echo $row['fruitname']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="new_qty" id="addTask" placeholder="Enter Quantity" class="form-control" value="<?php echo $row['Qty']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <img src="upload/<?php echo $row['fruitimage']?>" alt="" width="60px" height="60px">
                            <input type="file" name="newFruit_image" id="taskImage" class="form-control">
                            <input type="hidden" name="old__image" id="taskImage" class="form-control mt-3" value="<?php echo $row['fruitimage'];?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="newFruit_price" id="addTask" placeholder="Enter Price" class="form-control" value="<?php echo $row['fruitprice']; ?>">
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit" name="upd_fruit"  class="btn btn-success" value="Update Fruits">
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>


<!-- footer part -->
<div class="footer">
  <h5 class="pt-3">Copyritht &copy; 2021-2023</h5>
</div>
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
  </body>
</html>


