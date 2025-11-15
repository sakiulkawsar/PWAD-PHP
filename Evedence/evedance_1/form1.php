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
            <input type="number" name="student_id"> <br>
            <input type="submit" name="submit" value="Check">
       
    </form>

    <?php  
    if(isset($_POST["submit"])){
        $studen_id = $_POST["student_id"];

         include("result_Class.php");

        $sheet = new student("result_sheet.txt");
        $result = $sheet->result($stid);
        echo $result;
    }
    ?>
</body>
</html>