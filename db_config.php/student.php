<?php
include_once("db_con.php");

$sql = "SELECT * FROM employees ORDER BY employeeID asc";
$result = $db->query($sql);

// if (!$result) {
//     echo "Query error: " . $db->error;
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees</title>
  <style>
    table, th, td { border: 1px solid black; border-collapse: collapse; }
  </style>
</head>
<body>

<table>
  <tr>
    <th>Employee ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Birthdate</th>
  </tr>

  <?php while ($row1 = $result->fetch_object()) { ?>
  <tr>
    <!-- <td><?php echo $row1->employeeID; ?></td> -->
    <td><?php echo ($row1->employeeID); ?></td>
    <td><?php echo ($row1->first_name); ?></td>
    <td><?php echo ($row1->last_name); ?></td>
    <td><?php echo ($row1->birthdate); ?></td>
  </tr>
  <?php } ?>

</table>
<a href="new_entry.php">Add New Employee</a>

</body>
</html>
