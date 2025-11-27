<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "company_database";

$db = new mysqli($host, $user, $pass, $db);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM manufacturer WHERE id = $id";
$result = $db->query($sql);

if ($db->affected_rows) {
    session_start();
    $_SESSION['Message'] = "Manufacturer deleted successfully!";
} else {
    session_start();
    $_SESSION['Message'] = "Failed to delete manufacturer!";
}
header("Location: Insert_Manufacturer.php");