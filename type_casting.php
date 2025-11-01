<?php 
$number = (double) 55;
echo $number;
echo"<br>";
var_dump($number);
echo"<br>";
$number1 = (int) 44.65;
echo $number1;
echo"<br>";

$number2 = (int)"Today is saturday";
echo $number2;
echo"<br>";

$txt = (bool)"Hello";
echo $txt . "<br>";

echo gettype($txt);
echo"<br>";

$array = (array) 75;
echo $array [0] . "<br>";
echo"<br>";
echo gettype($array);
?>