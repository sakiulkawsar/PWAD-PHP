
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form validation</h2>
    <form action="" method="post">
        <input type="text" name="name"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php 
    if(isset($_POST["submit"])){
        $name = $_POST["name"];

        include("result_class.php");
        $sheet = new student("result.txt");
        $result = $sheet->result($stid);
        echo $result;

    }
    ?>
</body>
</html>