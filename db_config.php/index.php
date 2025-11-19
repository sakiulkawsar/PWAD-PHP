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
    <th colspan="2">Action</th>
  </tr>

  <?php while ($row1 = $result->fetch_object()) { ?>
  <tr>
    <!-- <td><?php echo $row1->employeeID; ?></td> -->
    <td><?php echo ($row1->employeeID); ?></td>
    <td><?php echo ($row1->first_name); ?></td>
    <td><?php echo ($row1->last_name); ?></td>
    <td><?php echo ($row1->birthdate); ?></td>
    <td> <a href="student_edit.php?id=<?php echo ($row1->employeeID); ?>"> Edit</a></td>
    <td> <a href="student_delete.php?id=<?php echo ($row1->employeeID); ?>">Delete</a> </td>
  </tr>
  <?php } ?>

</table>
<a href="new_entry.php">Add New Student</a>

</body>
</html>
