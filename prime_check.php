<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    if (isset($_REQUEST["submit"])) {
        $mynumber = $_REQUEST["mynumber"];
        if($mynumber==1){
            echo "$mumber is neither prime nor composite.";
        } elseif ($mynumber == 2) {
            echo "$mynumber is a prime number.";
        } else {
            $isPrime = true;
            for ($i = 2; $i <= ($mynumber); $i++) {
                if ($mynumber % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "$mynumber is a prime number.";
            } else {
                echo "$mynumber is not a prime number.";
            }
        }
    }
    ?>
        
    <form action="">
        <input type="number" name="mynumber" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>