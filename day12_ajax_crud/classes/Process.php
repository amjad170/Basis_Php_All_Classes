<?php
$con = new mysqli("localhost","root","","ajax_crud14");

 $action = $_POST["action"];  //insert
 
 $action();  //insert() function called here

 //Employee Add
 function insert(){
    global $con;

    $empName = $_POST["emp_name"];
    $empEmail = $_POST["emp_email"];
    $empPhone = $_POST["emp_phone"];
    $empStatus = $_POST["emp_status"];

    $sql = "INSERT INTO `employee`(`id`, `emp_name`, `emp_email`, `emp_phone`, `emp_status`) VALUES (NUll,'$empName','$empEmail','$empPhone','$empStatus')";

    $result = $con->query($sql);

    if($result){
        echo "Data inserted Successfully!";
    }
 }

//Employee Show
function show(){
    
 }


?>