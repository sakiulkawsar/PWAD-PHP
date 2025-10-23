<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find the largest number</h3>
    <?php 
        $numbers = [34, 67, 23, 89, 12, 90, 11,666];
        for ($i = 0; $i < count($numbers); $i++)
 
        if (!isset($largest) || $numbers[$i] > $largest) {
            $largest = $numbers[$i];
        }
        echo "The largest number is: $largest";
    
    ?>
</body>
</html>