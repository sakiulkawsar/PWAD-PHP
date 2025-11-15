<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Email validation</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name"> <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

 <?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];

    // echo "Your Name: $name <br>";
    // echo "Your Email: $email <br><br>";

    if(strlen($name) < 4|| strlen($name) > 8) {
        echo "username must be between 4 to 8 characters.<br>";
    } else {
         echo "Your Name: $name <br>";
    }

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "invalid email format <br>";
} else{
    echo " your email is $email valid";
}


}
?>

</body>
</html>