<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
</head>
<body>
    <h2>File Upload (Procedural PHP)</h2>

    <?php 
    if(isset($_POST['upload'])){
        $filename = $_FILES['myfile']['name'];
        $destination = "file/" . $filename;
        $tempFile = $_FILES['myfile']['tmp_name'];
        $fileSize = $_FILES['myfile']['size']; // Bytes

        $maxSize = 1048576; // 1 MB
        $fileExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $allowedType = ["jpg", "jpeg", "png"];
        $errors = [];

        if ($fileSize > $maxSize){
            $errors[] = "<h3>❌ File is too large (Max: 1MB)</h3>";
        }

        if(!in_array($fileExt, $allowedType)){
            $errors[] = "<h3>❌ Only JPG, JPEG and PNG files are allowed.</h3>";
        }

        if(count($errors) > 0){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        } else {
            if(move_uploaded_file($tempFile, $destination)){
                echo "<h3>✅ File uploaded successfully!</h3>";
            } else {
                echo "<h3>❌ Upload failed!</h3>";
            }
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" required>
        <input type="submit" value="UPLOAD" name="upload">
    </form>
</body>
</html>