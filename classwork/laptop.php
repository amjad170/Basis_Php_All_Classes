<?php include("includes/header.php") ?>

<?php 
    include("classes/LaptopManager.php");
    $t1 = new LaptopManager();

 
    if(isset($_POST['save'])){
        $t1->store($_POST);
    }

?>

<!-- body part -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
        <h2 class="display-5 text-primary text-center mb-4">Laptop List</h2>
            <table class="table table-bordered">
                <tr>
                    <th>#SL</th>
                    <th>Laptop Name</th>
                    <th>Qty</th>
                    <th>Laptop Image</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>

                <?php 

                    $data = $t1->show();
                    $i = 1;
                    while($row = mysqli_fetch_assoc($data)){ ?>

            <tr>
                <td><?php echo $i++;?></td>
                <td> <?php echo $row['mobilename'];?> </td>
                <td> <?php echo $row['Qty'];?> </td>

                <td>
                    <img src="upload/<?php echo $row['mobileimage'];?>" alt="" width="100px" height="60px">
                </td>

                <td> <?php echo $row['mobileprice'];?> </td>
                <td>
                <a href="laptopEdit.php?id=<?php echo $row['id']?>" class="btn  btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="laptopDelete.php?id=<?php echo $row['id']?>" class="btn  btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>

                <?php
                                }
                            
                            ?>


            </table>

            <div class="addTask">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h2 class="display-5 text-primary text-center mb-4">Add Laptop</h2>

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
                            <input type="text" name="mobilename" id="addTask" placeholder="Enter Laptop Name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="Qty" id="addTask" placeholder="Enter Quantity" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="file" name="mobileimage" id="taskImage" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="mobileprice" id="addTask" placeholder="Enter Price" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit" name="save"  class="btn btn-primary" value="Add Laptop">
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>




<?php include("includes/footer.php") ?>