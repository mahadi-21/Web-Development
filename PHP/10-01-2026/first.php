<?php
// constant define
define("name","Mahadi");
echo name;
echo "<br>";
echo name;
echo "<br>";
// variable define
$name = "CPC,KiU";
echo $name;
echo "<br>";

//Arithmetic Operators

$a=10;
$b=5;
$add = $a + $b;
$sub = $a - $b;
$mul = $a * $b;     
$div = $a / $b;
$mod = $a % $b;
echo "number a = ".$a."<br>";
echo "number b = ".$b."<br>";
echo "Addition = ".$add."<br>";
echo "Subtraction = ".$sub."<br>";      
echo "Multiplication = ".$mul."<br>";
echo "Division = ".$div."<br>";
echo "Modulus = ".$mod."<br>";

//Conditional Statements

$age = 12;
if($age>=18)
{
    echo "Voter";
}
else{
    echo "Non Voter";
}
echo "<br>";

//control structure using switch case

$day = 1;
switch($day){
    case 1:
        echo "Saturday";
        break;
    case 2:
        echo "Sunday";
        break;
    case 3:
        echo "Monday";
        break;
    case 4:
        echo "Tuesday";
        break;
    case 5:
        echo "Wednesday";
        break;
    case 6:
        echo "Thursday";
        break;
    case 7:
        echo "Friday";
        break;
    default:
        echo "Invalid Day";
}
?>