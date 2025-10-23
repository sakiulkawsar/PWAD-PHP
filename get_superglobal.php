<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['name'])) {
        print_r($_GET);
        // echo $_GET['name'];
        // echo "<br>";
        // echo $_GET['age'];
        echo "<br>";
    }
    ?>
    <a href="get_superglobal.php?name=karimul&age=25">click me</a>
</body>

</html>