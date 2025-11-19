<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>New studnet Entry</h3>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter your name"> <br>
        <input type="text" name="lname" placeholder="Enter your last name"> <br>
        <input type="date" name="bdate" placeholder="Enter your birthdate"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        include_once("db_con.php");

        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $birthdate = $_POST['bdate'];

        $sql = "INSERT INTO employees (first_name, last_name, birthdate) VALUES ('$first_name', '$last_name', '$birthdate')";

        if($db->query($sql) === TRUE){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }

        $db->close();
    }
    ?>
    <br>

    
    <a href="index.php">View Studnet</a>
</body>
</html>