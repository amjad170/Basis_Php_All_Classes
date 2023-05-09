<?php
$rice = 2*75;
$beef =800;
$chicken = 320;
$chili = 10;
$travel = 65;
$total = $rice+$beef+$chicken+$chili+$travel;

echo "2 kg rice's price {$rice},1 kg beef's price {$beef},1 kg chicken's price {$chicken},Clili's price {$chili},Travel's price {$travel},Total price {$total} <br>";



// find largest number between 3 numbers

$arr = [5,10,15,20,40,9,8,7,6,5,1];
$max = $arr[0];
$min = $arr[0];

for($i=0; $i<count($arr); $i++){

    if($max<=$arr[$i]){
        $max=$arr[$i];
    }

    if($min>=$arr[$i]){
        $min = $arr[$i];
    }
}

echo "The Largest number is  {$max} <br>";
echo "The Smallest number is  {$min}";


?>