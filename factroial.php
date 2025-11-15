<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factrail number</h3>
    <?php
    if (isset($_REQUEST["submit"])) {
        $mynumber = $_REQUEST["mynumber"];
       $factorial = 1;
        for ($i = 1; $i <= $mynumber; $i++) {
           
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