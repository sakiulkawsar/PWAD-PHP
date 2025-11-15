<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h3>Find the largest number</h3>
    <form action="" method="post">
        <input type="text" name="myNumber"><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php 
  if(isset($_POST["submit"])){
    $num = $_POST["myNumber"];

    $numbers = explode(",", $num);

    $largest = $numbers[0];
    $smallest = $numbers[0];

    foreach($numbers as $number){
        if($number > $largest){
            $largest = $number;
        }
        if($number < $smallest){
            $smallest = $number;
        }
  }
  echo "Largest number: $largest <br>";
  echo "Smallest number: $smallest";
}
    ?>
</body>
</html>