<?php
// OOP Part
class Pen{
    public $cname;
    public $pname;
    public $pprice;

   public function write(){
        echo "This Pen Write Excellent";
    }
}

// $matador
// $good_Luck
$Econo = new Pen();
$Econo ->cname = "Econo <br>";
echo "Company Name: " . $Econo ->cname;
$Econo ->pname = "Econo Full Time Ball Pen <br>";
echo "Pen Name: " .  $Econo ->pname;
$Econo ->pprice = 6;
echo "Price: " . $Econo ->pprice." Tk <br>";
$Econo->write();
echo "<hr>";


$Matador = new Pen();
$Matador ->cname = "Matador <br>";
echo "Company Name: " . $Matador ->cname;
$Matador ->pname = "MATADOR HI-SCHOOL <br>";
echo "Pen Name: " .  $Matador ->pname;
$Matador ->pprice = 5;
echo "Price: " . $Matador ->pprice." Tk <br>";
$Econo->write();
echo "<hr>";

$good_Luck = new Pen();
$good_Luck ->cname = "Good Luck <br>";
echo "Company Name: " . $good_Luck ->cname;
$good_Luck ->pname = "Good Luck Craze Blako  <br>";
echo "Pen Name: " .  $good_Luck ->pname;
$good_Luck ->pprice = 10;
echo "Price: " . $good_Luck ->pprice." Tk <br>";
$Econo->write();
echo "<hr>";

$ATCross = new Pen();
$ATCross ->cname = "A.T Cross <br>";
echo "Company Name: " . $ATCross ->cname;
$ATCross ->pname = "Cross Century II Ball  <br>";
echo "Pen Name: " .  $ATCross ->pname;
$ATCross ->pprice = 8835;
echo "Price: " . $ATCross ->pprice." Rs <br>";
$Econo->write();
echo "<hr>";

$Parker = new Pen();
$Parker ->cname = "Parker <br>";
echo "Company Name: " . $Parker ->cname;
$Parker ->pname = " Parker Premier Graduated Chiselling ST Fountain  <br>";
echo "Pen Name: " .  $Parker ->pname;
$Parker ->pprice = 21000;
echo "Price: " . $Parker ->pprice." Rs <br>";
$Econo->write();
echo "<hr>";


?>