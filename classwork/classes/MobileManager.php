<?php 
    session_start();
    include("config/config.php");

    class MobileManager extends Connection{

        // Add MObile
        public function store($allData){

            $mobileName = $allData['mobilename'];
            $mobileQty = $allData['Qty'];
        
            $mobileImage = $_FILES['mobileimage']['name'];
            $temImageName = $_FILES['mobileimage']['tmp_name'];
            
            $mobilePrice = $allData['mobileprice'];

            // $sql = "INSERT INTO `fruittable`(`fruitname`, `Qty`, `fruitimage`, `fruitprice`) VALUES ('$fruitName','$fruitQty','$fruitImage','$fruitPrice')";

            $sql = "INSERT INTO `mobiletable`(`mobilename`, `Qty`, `mobileimage`, `mobileprice`) VALUES ('$mobileName','$mobileQty','$mobileImage','$mobilePrice')";
            
            $result = $this->con->query($sql);

            if($result){
                $_SESSION['message'] = "Data Inserted Successfully!";
                $_SESSION['type'] = "success";
                move_uploaded_file($temImageName, "upload/".$mobileImage);
            }else{
                $_SESSION['message'] = "Data Not Inserted!";
                $_SESSION['type'] = "danger";
            }
        }

        // Show MObile
        public function show(){
           $result = $this->con->query("SELECT * FROM `mobiletable`");
           return $result;
        }

        // Delete MObile
        public function destroy($tid){

            // Image delete from upload directory.
            $fire = $this->con->query("SELECT * FROM `mobiletable` WHERE id = '$tid'");

            if($fire){
                $row = mysqli_fetch_assoc($fire);
                $mobileImage = $row['mobileimage'];
                unlink("upload/".$mobileImage);
            }


            // Task Delete From Database
            $result = $this->con->query("DELETE FROM `mobiletable` WHERE id = '$tid'");
            if($result){
                header("location: mobile.php");
            }
        }

        // Edit Fruits
        public function edit($tid){
              $fire = $this->con->query("SELECT * FROM `mobiletable` WHERE id = '$tid'");
             return $fire;
        }

        // Update Fruit
        public function update($allData, $tid){

            $newName = $allData['new_mobilename'];
            $newQty = $allData['new_Qty'];
           
            
            $old__imageName = $allData['old__image'];

            $new__imageName = $_FILES['new_mobileimage']['name'];
            $tmp__imageName = $_FILES['new_mobileimage']['tmp_name'];

            $newPrice = $allData['new_mobileprice'];

            if($new__imageName != ''){
                    $update_imageName = $new__imageName;
            }else{
                $update_imageName = $old__imageName;
            }

            if(file_exists("upload/".$new__imageName)){

                $sql = "UPDATE `mobiletable` SET `mobilename`='$newName',`Qty`='$newQty',`mobileimage`='$update_imageName',`mobileprice`='$newPrice' WHERE id='$tid'";


                $fire = $this->con->query($sql);
                
                header("location: mobile.php");

            }else{

                $sql = "UPDATE `mobiletable` SET `mobilename`='$newName',`Qty`='$newQty',`mobileimage`='$update_imageName',`mobileprice`='$newPrice' WHERE id='$tid'";

                $fire = $this->con->query($sql);

                if($fire){

                    if($new__imageName != ""){
                        move_uploaded_file($tmp__imageName, "upload/".$new__imageName);
                        unlink("upload/".$old__imageName);
                    }

                    $_SESSION['message'] = "Data Updated Successfully!";
                    $_SESSION['type'] = "success";
                    header("location:mobile.php");

                }else{
                    $_SESSION['message'] = "Data Not Updated!";
                    $_SESSION['type'] = "danger";
                    header("location:mobile.php");
                }

            }

        }




    }


?>