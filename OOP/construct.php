<?php 
class Fruit {
    public $name;
    public $color;
    function __construct($name){
   echo "Hello" . $name ."<br>";
    }
    function __destruct(){
        echo "bye bye....";

    }

}
new Fruit("rohim");
  
?>