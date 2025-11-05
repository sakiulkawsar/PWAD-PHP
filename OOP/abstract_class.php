<?php
abstract class abstract_class{
    public $name;
    public $address;

    function __construct($name, $address){
        echo $this->name = $name;
        echo $this->address = $address;
    }
   abstract public function profile();
        
    }

    class childClass extends abstract_class{
        function profile()
        {
          $detailes = ""  ;
          $detailes .= "name:" . $this->name ."<br>";
          $detailes .= "Address:" . $this->address ."<br>";
        }

    }
 $obj1 = new childClass("karimul", "Mirpur");
 echo $obj1->profile();
?>