<?php
$val1 = "Hello world , how are you";
// $val2 = & $val1;
$val2 = "We are using php, I Love php";
echo $val1;
echo "<br>";
echo $val2;
$val1 = & $val2;
echo "<br>";
echo $val1;
?>