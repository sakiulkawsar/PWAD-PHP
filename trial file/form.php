<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// $fullname = $_GET['fullname'];
// $email = $_GET['email'];
// $phone = $_GET['phone'];
if(isset($_GET['submit'])) {
    echo "Your name is: ".$fullname."<br>";
    echo "Your email is: ".$email."<br>";
    echo "Your phone number is: ".$phone."<br>";
} else {
    echo "Please submit the form.";
}

?>


    <h2>Login in form</h2>
    <form action="" method="get">
    <label for="">name:</label>
    <input type="text" name="fullname" placeholder="Enter your name"> <br>
    <input type="text" name="email" placeholder="Enter your email"> <br>
    <input type="text" name="phone" placeholder="Enter your number"> <br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>

</body>
</html>