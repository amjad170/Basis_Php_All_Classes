<?php 
     include("classes/TaskManager.php");
     $t1 = new TaskManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $data = $t1->edit($id);
        $row = mysqli_fetch_assoc($data);
     }

     if(isset($_POST['upd_task'])){
        $t1->update($_POST, $id);
     }

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                                <div class="alert alert-<?php echo $_SESSION['type']?> alert-dismissible fade show" role="alert">

                                <?php echo $_SESSION['message'];?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            <?php
                                    unset($_SESSION['message']);
                            }
                        ?>

                        <div class="form-group mb-3">
                            <label for="addTask">Add Task</label>
                            <input type="text" name="new_task" id="addTask" placeholder="Enter Task Details" class="form-control" value="<?php echo $row['task_name'];?>">
                        </div>

                        <div class="form-group mb-3">

                            <label for="taskImage">Task Image</label>

                            <img src="upload/<?php echo $row['task_img']?>" alt="" width="60px" height="60px">

                            <input type="file" name="task_image" id="taskImage" class="form-control mt-3">

                            <input type="hidden" name="old__image" id="taskImage" class="form-control mt-3" value="<?php echo $row['task_img'];?>">
                            
                        </div>

                        <div class="form-group mb-3">
                            <label for="addDate">Add Date</label>
                            <input type="date" name="new_date" id="addDate" class="form-control" value="<?php echo $row['task_date'];?>">
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit" name="upd_task"  class="btn btn-info" value="Update Task">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>