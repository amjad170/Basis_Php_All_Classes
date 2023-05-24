<?php
include("classes/TaskManager.php");
    $t1 = new TaskManager();

    if(isset($_POST['save'])){
      
       $t1->store($_POST);
       
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
            <div class="title">
                <h2 class="display-2 text-primary">Task Manager</h2>
                <p class="lead">This is a simple Project.We are going to use HTML,Bootstrap,PHP and MYSQL</p>
            </div>
            <div class="allTask py-4">
            <h2 class="display-5 text-primary">All Task</h2>
            <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Task Image</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>

                    <?php
                   $data = $t1->show();                         // $t1->show() == $result   is an object
                   $i =1; //for index number
                   while($row = mysqli_fetch_assoc($data)){ ?>    <!-- $data object convert to array -->

                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['task_name']; ?></td>

                        <td><img src="upload/.<?php echo $row['task_image']; ?>" alt="" width="50px" height="40px"></td>
                       

                        <td><?php echo date("d-M-Y",strtotime($row['task_date'])); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-pen-to-square me-2"></i></a>
                            <a href="delete.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                   
                  <?php }  ?>
            </table>
          </div>

            <div class="addTask">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2 class="display-5 text-primary">Add Task</h2>

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
                    <label for="addTask">Add Task</label>
                    <input type="text" name="add_task" id="addTask" placeholder="Enter Task Details" class="form-control">
                </div>

                
                <div class="form-group mb-3">
                    <label for="taskImage">Add Image</label>
                    <input type="file" name="task_image" id="taskImage" class="form-control">
                </div>


                <div class="form-group mb-3">
                    <label for="addDate">Add Date</label>
                    <input type="date" name="add_date" id="addDate" placeholder="Enter Task Details" class="form-control">
                </div>

                <div class="form-group mb-3">
                   
                    <input type="submit" name="save"class="btn btn-dark" value="Add Task">
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