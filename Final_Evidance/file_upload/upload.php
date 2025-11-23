<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload using PHP Procedural Coding</h3>
    <?php
    
    if (isset($_POST['upload'])){
        


     $filename = $_FILES['myfile']['name'];
     $destination = "file/" . $filename;
   

    $tmpFile = $_FILES['myfile']['tmp_name'];
    $FileSize = $_FILES['myfile']['size']; //byte...  1kb=8b
    $maxsize = 320; //40kB..

    $errors = [];


    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)) ;

    $allowedTypes = ["jpg","png","jpeg"];   

        if($FileSize>$maxsize){
            $errors[] = "<h3>File size should be <b>40KB or less</b></h3>";
        }
        if(!in_array($ext,$allowedTypes)){
            $errors[] = "<h3>Only <b>jpg, jpeg, png Files are Allowed</b></h3>";
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        }
               
        else{
            move_uploaded_file($tmpFile,$destination);
            echo "<h3>File Uploaded Successfully</h3>";
        }

    }



    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"> <br><br>
    <input type="submit" value="UPLOAD" name="upload"  >

    </form>



<!-- 
      echo "<pre>";
    print_r($_FILES);


    echo $_FILES['myfile']['full_path']. "<br>";
     echo $_FILES['myfile']['type']. "<br>";
     echo $_FILES['myfile']['tmp_name']. "<br>";
     echo $_FILES['myfile']['error']. "<br>";
     echo $_FILES['myfile']['size']. "<br>"; -->
</body>




</html>



