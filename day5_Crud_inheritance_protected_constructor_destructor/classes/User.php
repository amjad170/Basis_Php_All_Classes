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

       $sql = "INSERT INTO `users`(`id`,`name`,`email`,`password`) VALUES(NULL,`$name`,`$email`,`$password`)";

       $result = mysqli_query($this->con, $sql);

       if($result){
        echo "Data Inserted Successfully";
       }
    }
}

?>