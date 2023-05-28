<?php


//Php oop class constant and static Properties no need create object for call

//const Keyword,Name All capital letters
//:: Scope Resoulation operator
class Process{

    const GIVE = "24TK <br>";

    //class constant call from inside
    public function dosomething(){  
        echo "I am Amjad Hossain Give me ";
        echo self::GIVE;
    }
}



//Php oop class  static Properties

//static Keyword
//:: Scope Resoulation operator for call
class Process2{

    const GREETING = "HI ";
  private static $details = "My Name is "; //this can't call from out site
  public static $name = "Amjad <br>";

  public static function okay(){
        echo self::GREETING;
        echo self::$details;
        echo self::$name;
        echo "I am Okay <br>";
  }
  public static function okay2(){
       self::okay();
    echo "I like Pencilbox <br>";
  }

}



//base class 
class Base{
    public static function somthing(){
        echo "Something";
    }
}

//child class
class Chile extends Base{

    public static function hi(){
            echo "HI ";
            parent::somthing();
    }
}


?>