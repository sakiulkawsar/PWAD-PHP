<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "pwad68_test";

$db = new mysqli($host, $user, $pass, $db);

ob_start();
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// echo "Connected successfully";`

$project_URL = "http://localhost/php-webside/Admin/";
