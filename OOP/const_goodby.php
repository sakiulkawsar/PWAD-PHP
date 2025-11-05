<?php 
class goodByClass{

    const MYMAS = "we are learning oop <br>";
    const MYMAS2 = "we are learning js";

    function info(){
        echo self::MYMAS2;
    }
}
echo goodByClass::MYMAS;

$obj1 = new goodByClass;
$obj1->info();

?>