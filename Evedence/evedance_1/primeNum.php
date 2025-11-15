<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prime number checker</h2>
    <form action="" method="post">
        <input type="number" name="myNumber"> <br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php 
if(isset($_POST["submit"])){
    $myNumber = $_POST["myNumber"];

    if($myNumber == 1){
        echo "$myNumber is not a prime number";
    } elseif($myNumber == 2){
        echo "$myNumber is a prime number";
    } else {
        $isPrime = true;

        for($i = 2; $i <= sqrt($myNumber); $i++){
            if($myNumber % $i == 0){
                $isPrime = false;
                break;
            }
        }

        if($isPrime){
            echo "$myNumber is a prime number";
        } else {
            echo "$myNumber is not a prime number";
        }
    }
}
?>

</body>
</html>