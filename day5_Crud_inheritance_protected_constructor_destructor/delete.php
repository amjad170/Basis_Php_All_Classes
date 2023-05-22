<?php
include("classes/User.php");
$u1 = new Users();


$id = $_GET['id'];

if(isset($_GET['id'])){
    $u1->delete_user($id);
}

?>