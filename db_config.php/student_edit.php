<?php
include_once("db_con.php");
$id = $_GET['id'];    
echo $id;

$sql = "SELECT * FROM employees WHERE employeeID = '$id'";
$rawdata = $db->query($sql);
$row = $rawdata->fetch_object();
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // extract($_POST); 

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $birthdate = $_POST['bdate'];

    $sql = "UPDATE employees SET first_name = '$first_name', last_name = '$last_name', birthdate = '$birthdate' WHERE employeeID = '$id'";

    if($db->query($sql) === TRUE){
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->query($sql);
    header("Location: index.php");
    exit;   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> studnet Edit</h3>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter your name" value="<?php echo ($row->first_name); ?>"> <br>
        <input type="text" name="lname" placeholder="Enter your last name" value="<?php echo ($row->last_name); ?>"> <br>
        <input type="date" name="bdate" placeholder="Enter your birthdate" value="<?php echo ($row->birthdate); ?>"> <br>
        <input type="hidden" name="id" value="<?php echo ($row->employeeID); ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>