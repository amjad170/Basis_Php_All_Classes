<?php include("includes/header.php") ?>

<?php 
     include("classes/MobileManager.php");
     $t1 = new MobileManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $data = $t1->edit($id);
        $row = mysqli_fetch_assoc($data);
     }

     if(isset($_POST['upd_mobile'])){
        $t1->update($_POST, $id);
     }

?>

<!-- body part -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
    
            <div class="addTask">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h2 class="display-5 text-primary text-center mb-4">Mobile Update</h2>

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
                            <input type="text" name="new_mobilename" id="addTask" placeholder="Enter Mobile Name" class="form-control" value="<?php echo $row['mobilename'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="new_Qty" id="addTask" placeholder="Enter Quantity" class="form-control" value="<?php echo $row['Qty'] ?>">
                        </div>

                        <div class="form-group mb-3">
                            <img src="upload/<?php echo $row['mobileimage']?>" alt="" width="60px" height="60px">
                            <input type="file" name="new_mobileimage" id="taskImage" class="form-control" value="<?php echo $row['mobileimage'] ?>">
                            <input type="hidden" name="old__image" id="taskImage" class="form-control mt-3" value="<?php echo $row['mobileimage'];?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="new_mobileprice" id="addTask" placeholder="Enter Price" class="form-control" value="<?php echo $row['mobileprice'] ?>">
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit" name="upd_mobile"  class="btn btn-primary" value="Add MObile">
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>




<?php include("includes/footer.php") ?>