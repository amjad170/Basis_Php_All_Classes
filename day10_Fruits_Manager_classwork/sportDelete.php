<?php include("includes/header.php") ?>

<?php 
     include("classes/SportManager.php");
     $t1 = new SportManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $t1->destroy($id);
     }



?>

<?php include("includes/footer.php") ?>