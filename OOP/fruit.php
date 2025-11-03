<?php
class Fruit {
    public $name;
    public $color;

}

$fruitobj = new Fruit(); // ✅ create object first

var_dump($fruitobj);
echo "<br>";

$fruitobj->name = "Mango";
$fruitobj->color = "black";

$fruitobj2 = new Fruit;
$fruitobj2->name = "jackfruit";
$fruitobj2->color = "yellow";


var_dump($fruitobj2);
?>
