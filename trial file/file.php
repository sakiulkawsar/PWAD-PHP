<?php
$data = file("user.txt");
// echo "<pre>";
// print_r($data);


foreach($data as $line){

    // echo $line . "<br>";

    list($name, $email) = $info = explode(" ", $line);

    // $info = explode(" ", $line);
    // print_r($info);
    echo "Name: $name ". "Email: $email " . "<br>";
}

?>