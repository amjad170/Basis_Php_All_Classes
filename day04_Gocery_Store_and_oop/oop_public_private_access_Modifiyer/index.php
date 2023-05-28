<?php

class Cat{
    private $name;
   
    public function typeName($n){
     $this->name = $n;
     echo "My name is {$this->name} <br>";
     $this->typeAge();
      $this->typeHeight();
    }

    private function typeAge(){
        echo "My age is 25 <br>";
    }
    
    private function typeHeight(){
        echo "My height 5.7 fit  <br>";
    }
}

$h1 = new Cat();
$h1->typeName("Amjad");
?>