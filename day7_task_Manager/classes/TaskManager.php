<?php

include("config/config.php");

class TaskManager extends Connection
{

  //Add Task
  public function store($allData)
  {   //$allData == $_POST  array

    $taskName = $allData['add_task'];

    $imageName = $_FILES['task_image']['name'];
    $tempImageName = $_FILES['task_image']['tmp_name'];

    $taskDate = $allData['add_date'];

    $sql = "INSERT INTO `task`(`task_name`, `task_image`, `task_date`) VALUES ('$taskName','$imageName','$taskDate')";
    $result = $this->con->query($sql);      // old style  mysqli_query($this->con,"Here query code")

    if ($result) {
      echo "Data Inserted Successfully!";
      move_uploaded_file($tempImageName, "upload/.$imageName");
    }
  }


  //Show Task
  public function show()
  {
    $result =  $this->con->query("SELECT * FROM `task`");
    return $result;
  }
}
