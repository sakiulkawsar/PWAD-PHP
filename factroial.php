<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Checker</title>
</head>
<body>
    <h3>Factorial Number</h3>

    <form action="" method="post">
        <label>Number:</label>
        <input type="number" name="mynumber" required> <br><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php 
    if(isset($_POST["submit"])){

        $num = $_POST["mynumber"];

        // factorial of 0 is 1 (not 0)
        if($num == 0){
            echo "<h3>Factorial of 0 is: 1</h3>";
            exit;
        }

        $fact = 1;
        for($i = 1; $i <= $num; $i++){
            $fact *= $i;
        }

        echo "<h3>Factorial of $num is: $fact</h3>";
    }
    ?>
</body>
</html>
