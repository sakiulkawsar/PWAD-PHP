<?php 
$foods = array("apple", "banana", "grape", "orange", "org");
$food =  preg_grep("/^o/", $foods);
print_r($food);
?>