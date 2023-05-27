<?php

session_start();

include("config/config.php");

class TaskManager extends Connection{
    
    //Add Task
    public function store($allData){   //$allData == $_POST  array

        $taskName = $allData['add_task'];

        $imageName = $_FILES['task_image']['name'];
        $tempImageName = $_FILES['task_image']['tmp_name'];
 
        $taskDate = $allData['add_date'];

        $sql = "INSERT INTO `task`(`task_name`, `task_image`, `task_date`) VALUES ('$taskName','$imageName','$taskDate')";
       $result = $this->con->query($sql);      // old style  mysqli_query($this->con,"Here query code")

       if($result){
        $_SESSION['message'] = "Data Inserted Successfully!";
        $_SESSION['type'] = "success";
        move_uploaded_file($tempImageName,"upload/".$imageName);
       }else{
              $_SESSION['message'] = "Data Not Inserted!";
              $_SESSION['type'] = "danger";
       }
    }


    //Show Task
    public function show(){
      $result =  $this->con->query("SELECT * FROM `task`");
      return $result;
    }


    //Delete Task
    public function destroy($tid){
      //Image delete from upload directory
     $fire = $this->con->query("SELECT * FROM `task` WHERE id='$tid'");
     if($fire){
      $row = mysqli_fetch_assoc($fire);
      $taskimage = $row['task_image'];
      unlink("upload/".$taskimage);
     }

      //task delete from database
      $result = $this->con->query("DELETE FROM `task` WHERE id ='$tid'");
      if($result){
        header("Location: index.php");
      }
    }


    //Edit task
    public function edit($tid){
      $fire = $this->con->query("SELECT * FROM `task` WHERE id='$tid'");
      return $fire;
    }

    //Update Task
    public function update($allData,$tid){
 

     $taskName = $allData['add_task'];
     $taskDate = $allData['add_date'];
     //$oldtask__imageName = $allData['old__image'];

     $old__imageName = $_FILES['old__image']['name'];
     $newtmp__imageName = $_FILES['old__image']['tmp_name'];
     

     $new__imageName = $_FILES['task_image']['name'];
     $tmp__imageName = $_FILES['task_image']['tmp_name'];

     if($new__imageName != ''){
            $update_imageName = $new__imageName;
     }else{
      $update_imageName = $old__imageName;
     }

     if(file_exists("upload/".$update_imageName)){

              $sql = "UPDATE `task` SET `task_name`='$taskName',`task_date`='$taskDate' WHERE id = $tid";

              $fire = $this->con->query($sql);
              if($fire){

            $_SESSION['message'] = "Data Updated Successfully!";
            $_SESSION['type'] = "success";
            header("location: index.php");
  
          }else{
            $_SESSION['message'] = "Data Not Updated!";
            $_SESSION['type'] = "danger";
            header("location: index.php");
                }
      }
     else{

      $sql = "UPDATE `task` SET `task_name`='$taskName',`task_image`='$new__imageName ',`task_date`='$taskDate' WHERE id = $tid";

      $fire = $this->con->query($sql);

     if($fire){

           if($new__imageName != ""){
             move_uploaded_file($tmp__imageName,"upload/".$new__imageName);
             unlink("upload/".$old__imageName);
             
           }
       $_SESSION['message'] = "Data Updated Successfully!";
       $_SESSION['type'] = "success";
       header("location: index.php");
     
     }else{
       $_SESSION['message'] = "Data Not Updated!";
       $_SESSION['type'] = "danger";
       header("location: index.php");
           }
             
                  
       }
     
    }



      
    




}
