<?php
// echo "<pre>";
// print_r($_SERVER);
foreach ($_SERVER as $key => $value) {
    echo $key, "<br>";
    echo $_ENV['HOSTNAME']="Localhost";
}
