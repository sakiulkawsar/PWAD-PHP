<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th {
            background: #2c7be5;
            color: white;
            padding: 12px;
            font-size: 16px;
            letter-spacing: 0.3px;
            text-align: left;
        }

        table td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
            font-size: 15px;
        }

        table tr:nth-child(even) {
            background: #f9fbff;
        }

        table tr:hover {
            background: #e8f1ff;
            transition: 0.2s;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        h3 {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
            color: #2c7be5;
        }

        .view-link-container {
            text-align: center;
            margin-top: 15px;
        }

        .view-link-container a {
            text-decoration: none;
            background: #2c7be5;
            color: #fff;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 16px;
            transition: 0.2s;
        }

        .view-link-container a:hover {
            background: #1a5fc4;
        }
    </style>

</head>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "company_database";

$db = new mysqli($host, $user, $pass, $db);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

<body>

    <h3>View Products</h3>

    <div>
        <a href="manufacturer.php"> View Manufacturer</a>
    </div>

    <?php
    $sql = "SELECT * FROM product_list";
    $result = $db->query($sql);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Price</th>
            <th>Manufacturer Company</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><?php echo $row['name'] ?> </td>
                <td><?php echo $row['price'] ?> </td>
                <td><?php echo $row['Manufacture Company'] ?> </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>