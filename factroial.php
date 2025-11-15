<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factorial number</h3><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Checker</title>
</head>
<body>
    <h3>Factorial number</h3>
    <form action="" method="post">
        <label>Number:</label>
        <input type="number" name="myNumber"> <br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php 
    if(isset($_POST["submit"])){
        $num = $_POST["myNumber"];

        if($num == 0){
            echo "Factorial of $num is: 0";
            exit;
        }

        $fact = 1;
        for($i = 1; $i <= $num; $i++){
            $fact *= $i;
        }

        echo "Factorial of $num is: $fact";
    }
    ?>
</body>
</html>

    <?php
    if (isset($_REQUEST["submit"])) {
        $mynumber = $_REQUEST["mynumber"];
       $factorial = 1;
        for ($i = 1; $i <= $mynumber; $i++) {
            $i <= $mynumber;
            $factorial *= $i;
        }
        echo "Factorial of $mynumber is: $factorial";

    }
    ?>
    <form action="">
        <input type="number" name="mynumber" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>