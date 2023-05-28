<?php
// construct,distruct################################
/* class Human1{

    public $name;

   public function __construct(){
        echo "Hi <br>";
    }

   public function sayhi(){
        echo "I am Amjad <br>";
    }


   public function __destruct(){
        echo  "By <br>";
    }
}


$u1 = new Human1();
$u1->sayhi();
 */



// Single Inheritance################################################

class Animal{

    protected function eat(){    //protected can call form only inheritance class and own class
        echo "I can eating <br>";
    }
    public function run(){          // public can call every where globaly
        echo "I can running <br>";
    }
    private function sleep(){       //private can  call only from own class
        echo "I can sleeping <br>";
    }
}


class Human extends Animal{
    public function humanSay(){
        echo "Assalamualaikum <br>";
        $this->eat();      ////this will  work because this is protected
        $this->run();
       // $this->sleep(); ////this will not work because this is private
    }
}

class Cat extends Animal{
    public function catSay(){
        echo "Mew! <br>";
        $this->eat();   ////this will  work because this is protected
        $this->run();
       // $this->sleep(); ////this will not work because this is private
    }
}

class Dog extends Animal{
    public function dogSay(){
        echo "Woof! <br>";
        $this->eat();    ////this will  work because this is protected
        $this->run();
       // $this->sleep(); ////this will not work because this is private
    }
}


$h1 = new Human();
$h2 = new Cat();
$h3 = new Dog(); 
$h1->humanSay();
$h2->catSay();
$h3->dogSay();


?>

