<?php
class Fruit{
public $name;
public $color;

function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
}
function info(){
    echo "Name:" . $this->name . "color:" .$this->color;
}
}

class Grape extends Fruit{
    function message(){
        echo "I am a funcation inside the grap funcation";
    }
}
$obj1 = new Fruit("Apple", "Green");
$obj1->info();

new Grape("Orange", "yellow");
$obj2->info();
$obj2->message();

?>