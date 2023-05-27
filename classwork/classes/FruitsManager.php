<?php 
    session_start();
    include("config/config.php");

    class FruitsManager extends Connection{

        // Add Fruits
        public function store($allData){

            $fruitName = $allData['fruit_name'];
            $fruitQty = $allData['fruit_qty'];
        
            $fruitImage = $_FILES['fruit_image']['name'];
            $temImageName = $_FILES['fruit_image']['tmp_name'];
            
            $fruitPrice = $allData['fruit_price'];

            $sql = "INSERT INTO `fruittable`(`fruitname`, `Qty`, `fruitimage`, `fruitprice`) VALUES ('$fruitName','$fruitQty','$fruitImage','$fruitPrice')";
            
            $result = $this->con->query($sql);

            if($result){
                $_SESSION['message'] = "Data Inserted Successfully!";
                $_SESSION['type'] = "success";
                move_uploaded_file($temImageName, "upload/".$fruitImage);
            }else{
                $_SESSION['message'] = "Data Not Inserted!";
                $_SESSION['type'] = "danger";
            }
        }

        // Show Fruits
        public function show(){
          $result = $this->con->query("SELECT * FROM `fruittable`");
         return $result; 
        }

        // Delete Fruit
        public function destroy($tid){

            // Image delete from upload directory.
            $fire = $this->con->query("SELECT * FROM `fruittable` WHERE id = '$tid'");

            if($fire){
                $row = mysqli_fetch_assoc($fire);
                $fruitImage = $row['fruitimage'];
                unlink("upload/".$fruitImage);
            }


            // Task Delete From Database
            $result = $this->con->query("DELETE FROM `fruittable` WHERE id = '$tid'");
            if($result){
                header("location: index.php");
            }
        }

        // Edit Fruits
        public function edit($tid){
              $fire = $this->con->query("SELECT * FROM `fruittable` WHERE id = '$tid'");
             return $fire;
        }

        // Update Fruit
        public function update($allData, $tid){

            $newName = $allData['new_fruitName'];
            $newQty = $allData['new_qty'];
           
            
            $old__imageName = $allData['old__image'];

            $new__imageName = $_FILES['newFruit_image']['name'];
            $tmp__imageName = $_FILES['newFruit_image']['tmp_name'];

            $newPrice = $allData['newFruit_price'];

            if($new__imageName != ''){
                    $update_imageName = $new__imageName;
            }else{
                $update_imageName = $old__imageName;
            }

            if(file_exists("upload/".$new__imageName)){

                // $sql = "UPDATE `task` SET `task_name`='$newName',`task_img`='$update_imageName',`task_date`='$newDate' WHERE id='$tid'";

                $sql = "UPDATE `fruittable` SET `fruitname`='$newName',`Qty`='$newQty',`fruitimage`='$update_imageName',`fruitprice`='$newPrice' WHERE id='$tid'";


                $fire = $this->con->query($sql);
                
                header("location: index.php");

            }else{

                // $sql = "UPDATE `task` SET `task_name`='$newName',`task_img`='$update_imageName',`task_date`='$newDate' WHERE id='$tid'";
                $sql = "UPDATE `fruittable` SET `fruitname`='$newName',`Qty`='$newQty',`fruitimage`='$update_imageName',`fruitprice`='$newPrice' WHERE id='$tid'";

                $fire = $this->con->query($sql);

                if($fire){

                    if($new__imageName != ""){
                        move_uploaded_file($tmp__imageName, "upload/".$new__imageName);
                        unlink("upload/".$old__imageName);
                    }

                    $_SESSION['message'] = "Data Updated Successfully!";
                    $_SESSION['type'] = "success";
                    header("location:index.php");

                }else{
                    $_SESSION['message'] = "Data Not Updated!";
                    $_SESSION['type'] = "danger";
                    header("location:index.php");
                }

            }

        }




    }


?>