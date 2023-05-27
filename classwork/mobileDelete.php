<?php include("includes/header.php") ?>

<?php 
     include("classes/MobileManager.php");
     $t1 = new MobileManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $t1->destroy($id);
     }



?>

<?php include("includes/footer.php") ?>