<?php include_once "upload.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload Using OOP</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){

			$info = $_FILES['photo'];

			$obj = new File($info);

			$obj->upload();

		}
	 ?>

	<form method="post" enctype="multipart/form-data">
		<input type="file" name="photo">
		<input type="submit" name="submit" value="UPLOAD">
	</form>

</body>
</html>