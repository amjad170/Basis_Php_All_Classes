<?php
abstract class Bank{
    abstract public function bankName();
    abstract public function license();
}


class DBBL extends Bank{
    function bankName(){
        echo "Bank Name: Dutch Bangla Bank Ltd.<br>";
    }
    function license(){
        echo "License : Yes<br>";
    }
}

class City extends Bank{
    function bankName(){
        echo "Bank Name: City Bank Ltd.<br>";
    }
    function license(){
        echo "License : Yes<br>";
    }
}

class Asia extends Bank{
    function bankName(){
        echo "Bank Name: Asia Bank Ltd.<br>";
    }
    function license(){
        echo "License : Yes<br>";
    }
}




 $dbbl = new DBBL();
 $dbbl->bankName();
 $dbbl->license();

 $city = new City();
 $city->bankName();
 $city->license();

 $asia = new Asia();
 $asia->bankName();
  $asia->license();








?>