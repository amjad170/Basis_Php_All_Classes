<?php include("includes/header.php") ?>

<?php 
     include("classes/LaptopManager.php");
     $t1 = new LaptopManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $t1->destroy($id);
     }



?>

<?php include("includes/footer.php") ?>