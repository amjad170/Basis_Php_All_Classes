<?php 
     include("classes/FruitsManager.php");
     $t1 = new FruitsManager();

     $id = $_GET['id'];

     if(isset($_GET['id'])){
        $t1->destroy($id);
     }



?>