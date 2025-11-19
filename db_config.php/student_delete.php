<?php 
include_once("db_con.php");

$id = $_GET['id'];    
echo $id;

$sql = "DELETE FROM employees WHERE employeeID = '$id'";
$db->query($sql);

header("Location: index.php");
exit;   
?>
