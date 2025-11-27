<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "company_database";

$db = new mysqli($host, $user, $password, $db);
?>

<body>
    <h3>Manufacturer company</h3>
    <form action="" method="post">
        <label for="">ID:</label>
        <input type="number" name="id" placeholder="Enter your id"> <br>
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <label for="">Address:</label>
        <input type="text" name="address" placeholder="Enter your address"><br>
        <label for="">Countract</label>
        <input type="text" name="contract" placeholder="Enter your contract"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // $name = $_POST['name'];
        // $address = $_POST['address'];
        // $contract = $_POST['contract'];
        extract($_POST);

        $sql = "CALL manufacture_insert	('$name', '$address', '$contract')";
        $db->query($sql);
        if ($db->affected_rows) {
            echo "<h4> Manufaturer added sucessfully</h4>";
        }

        // $sql = "INSERT INTO `manufacturer`(`name`, `address`, `contract_no`) VALUES ('$name','$address','$contract')";

        // if ($db->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $db->error;
        // }

        // $db->close();
    }
       $sql2 = "SELECT * FROM manufacturer";
    $result = $db->query($sql2);
    ?>

    <h1>List of current manufacturer</h1>




    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM manufacturer";
        $rawData = $db->query($sql);
        while ($row = $rawData->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
               <td><?php echo $row['contact_no'] ?> </td>
                    <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>