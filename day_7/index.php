<?php
include("classes/TaskManager.php");
    $t1 = new TaskManager();

    



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row py-4">
        <div class="col-lg-8 offset-lg-2 shadow px-5">
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
                    <tr>
                        <td>1</td>
                        <td>Demo Task1</td>
                        <td>Image Name</td>
                        <td>12-10-202</td>
                        <td><a href="" class="btn btn-info">Edit</a></td>
                    </tr>
                   
               
            </table>
          </div>

            <div class="addTask">
            <form action="" method="POST" enctype="">
                <h2 class="display-5 text-primary">Add Task</h2>

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
                    <input type="date" name="add_task" id="addDate" placeholder="Enter Task Details" class="form-control">
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

    <script src="js/slick.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- bundle has other js included in it like popper. js -->
    <script src="js/main.js"></script>
    
</body>
</html>