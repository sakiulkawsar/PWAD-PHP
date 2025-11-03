<?php
class Fruit{
    private $name;
    private $color;

    //setter funcation
    public function set_name($name)  {
        $this->name = $name;
    }
     //setter funcation
 public function set_color($color)  {
        $this->color = $color;

}
function get_name_color(){
   return "Name:" . $this->name. "<br>" . "color:" . $this->color;
}

}

$obj1 = new Fruit;
$obj1->set_name("Apple");
$obj1->set_color("green");
var_dump($obj1);

?>