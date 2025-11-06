<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Find result</h3>
    <form action="" method="post">
        <input type="number" name="student_id">
        <input type="submit" name="search" value="SEARCH">
    </form>

    <?php
    if (isset($_POST["search"])) {
        $stid =  $_POST["student_id"];
        // echo "Roll Number: $roll";
        include("result_Class.php");

        $sheet = new student("result_sheet.txt");
        $result = $sheet->result($stid);
        echo $result;
    }

    ?>
</body>

</html>