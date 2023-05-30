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
    global $con;

   $result = $con->query("SELECT * FROM `employee`");
   $i=1; //for index
   foreach($result as $employee){?>
      
             <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $employee['emp_name'] ?></td>
                <td><?= $employee['emp_email'] ?></td>
                <td><?= $employee['emp_phone'] ?></td>

                <td>
                <?php
                if( $employee['emp_status']==1){?>
                    <button class="btn btn-success btn-sm" id="activeBtn" value="<?= $employee['id']; ?>"><i class="fa-solid fa-user-check"></i></button>
               <?php }else{?>
                        <button class="btn btn-danger btn-sm" id="inactiveBtn"  value="<?= $employee['id']; ?>"><i class="fa-solid fa-user-xmark"></i></button>
              <?php }
                 ?>
                </td>

                <td>
                  <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                  <button class="btn btn-sm btn-danger" id="deleteBtn" value="<?= $employee['id']; ?>" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i></button>
                </td>
              </tr> 
             
 <?php }

}


//Active to inactive
function activeToinactive(){
    global $con;
   $id = $_POST['id'];
   $result = $con->query("UPDATE `employee` SET `emp_status`='0' WHERE id='$id'");
}

//inactive  to  Active
function inactiveToactive(){
    global $con;
   $id = $_POST['id'];
   $result = $con->query("UPDATE `employee` SET `emp_status`='1' WHERE id='$id'");

}

//Delete Employee
function destroy(){
    global $con;
    $id = $_POST['id'];
   $result = $con->query("DELETE FROM `employee` WHERE id='$id'");
}

?>
