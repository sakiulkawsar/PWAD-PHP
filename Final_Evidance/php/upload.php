<?php 
class File {
	public $fileinfo;

	public function __construct($x){
		$this->fileinfo = $x;
	}

	public function upload(){
		$info = $this->fileinfo;
		$name = $info['name'];
		$tmpName = $info['tmp_name'];
		$filesize = $info['size'];
		$allowedsize = 512000; // 500kb
		$allowedtypes = ["jpg", "png"];
		$errors = array();

		$data = pathinfo($name);
		$ext = strtolower($data['extension']);
		

		if($filesize>$allowedsize){
			$errors[] =  "File size must be within 500kb";
		}

		if(!in_array($ext, $allowedtypes)){
			$errors[] =  "File type must be jpg and png";
		}

		if(count($errors)>0){
			foreach($errors as $err){
					echo $err . "<br>";
				} 
			} else {
				if(move_uploaded_file($tmpName, "uploads/". $name)){
				echo "Uploaded successfully";
				}
			}		
		
		//print_r($data);
		
	}

}	


 ?>