<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>File uploading using PhP procedural coding</h3>
    <?php
    if (isset($_POST['upload'])) {
        // echo "<pre>";
        // print_r($_FILES);
        $filename =  $_FILES['myfile']['name'];
        $destination =  "file/" . $filename;


        $tempFile =  $_FILES['myfile']['tmp_name'];
        $FileSize =  $_FILES['myfile']['size']; //Byte

        $maxSize = 1048576; ;//1MB

        echo $text = strtolower (pathinfo($filename, PATHINFO_EXTENSION));  //pathinfo

        $allowedType = ["jpg", "jpeg", "pnp"];
         $errors = [];


        if( $FileSize>$maxSize){
           $errors [] = "<h1>File is too large</h1>";
        }
        if(!in_array($text, $allowedType)){
         $errors[] = "<h1> jpg, pnp and jpeg is allowed</h1>";
        }

        if(count($errors)>0){
            echo $errors. "<br>";
        
        } else{
            move_uploaded_file($tempFile, $destination);
            echo "<h1>uploaded successfull</h1>";
        }
    

        move_uploaded_file($tempFile, $destination);
        // echo "uploaded successfull";
    }
    ?>



    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="UPLOAD" name="upload">
    </form>
</body>

</html>