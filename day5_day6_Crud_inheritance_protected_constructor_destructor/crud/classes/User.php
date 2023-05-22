<?php

class Users{

    private $con;   //private type variable so that hacker can't hack

    public function __construct(){

        define("HOSTNAME","localhost"); //constant type variable so that hacker can't hack
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","test5");

       $this->con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
    }


    // Add User
    public function add_user($info){

       $name = $info['name'];
       $email = $info['email'];
       $password = $info['password'];

        $sql = "INSERT INTO `users`(`id`,`name`,`email`,`password`) VALUES (NULL,'$name','$email','$password')";

        $result = mysqli_query($this->con, $sql); // print_r($result) == 1, var_dump($result)==bool(true)

    }

    // Show Users

    public function show_user(){
        $result = mysqli_query($this->con,"SELECT * FROM `users`");// $result is an Object

       return $result;
    }


    // Delete User
    public function delete_user($uid){
       $result = mysqli_query($this->con, "DELETE FROM `users` WHERE id='$uid'");

       if($result){
        header("Location: index.php");
       }
    }


    // Edit User
    public function edit_user($uid){
        $result = mysqli_query($this->con, "SELECT * FROM `users` WHERE id='$uid'"); // $result is an Object
        return $result;
    }

    // Update User
    public function update_user($data, $uid){   // here $data = $_POST is an Array
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE id='$uid'";
        $result = mysqli_query($this->con, $sql);

        if($result){
            header("Location: index.php");
        }
    }



}

?>