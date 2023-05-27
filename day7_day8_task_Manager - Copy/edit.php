<?php
include("classes/TaskManager.php");
    $t1 = new TaskManager();

  $id = $_GET['id'];

  if(isset($_GET['id'])){
   $data = $t1->edit($id);
   $row = mysqli_fetch_assoc($data);
  }

  if(isset($_POST['upd_task'])){
    $t1->update($_POST,$id );
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row py-4">
        <div class="col-lg-8 offset-lg-2 shadow p-5">
          
            <div class="addTask">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2 class="display-5 text-primary">Update Task</h2>

                <!-- Display Message -->
                <?php
                
                if(isset($_SESSION['message'])){?>

                        <div class="alert alert-<?php echo $_SESSION['type'];?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

              <?php 

              unset($_SESSION['message']);
              
            }
                
                ?>

                <div class="form-group mb-3">
                    <label for="addTask">Update Task</label>
                    <input type="text" name="add_task" id="addTask" placeholder="Enter Task Details" class="form-control" value="<?php echo $row['task_name']; ?>">
                </div>

                
                <div class="form-group mb-3">
                    <label for="taskImage">update Image</label>
                    <img src="upload/<?php echo $row['task_image']?>" alt="" width="60px" height="60px">
                    <input type="file" name="task_image" id="taskImage" class="form-control mt-3">
                    <input  hidden type="file" name="old__image" id="taskImage" class="form-control mt-3" value="<?php echo $row['task_image']; ?>">
                </div>


                <div class="form-group mb-3">
                    <label for="addDate">update Date</label>
                    <input type="date" name="add_date" id="addDate" placeholder="Enter Task Details" class="form-control" value="<?php echo $row['task_date']; ?>">
                </div>

                <div class="form-group mb-3">
                   
                    <input type="submit" name="upd_task"class="btn btn-info" value="Update Task">
                </div>

            </form>

           </div>
          </div>
        </div>
           </div>
        

       
    </div>




    <!-- <script src="js/jquery-3.6.4.min.js"></script> -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- bundle has other js included in it like popper. js -->
    <script src="js/main.js"></script>
    
</body>
</html>