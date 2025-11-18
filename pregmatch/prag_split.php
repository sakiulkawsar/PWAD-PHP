<?php
$delimatedText = "apple+++++banana+++++grape+++++orange";
$filds = preg_split("/\+\+\+\+\+/", $delimatedText);
foreach($filds as $field){
    echo $field . "<br>";
}
?>