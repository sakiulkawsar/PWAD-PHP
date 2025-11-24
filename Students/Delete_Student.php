<?php
include_once "../inc/db_config.php";

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE employeeID = $id";
$result = $db->query($sql);

if ($db->affected_rows) {
    session_start();
    $_SESSION['Message'] = "Student deleted successfully!";
} else {
    session_start();
    $_SESSION['Message'] = "Failed to delete student!";
}
header("Location: All_Students.php");
