<html>
<head>
<title>Image Upload</title>

</head>
<body>

 
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<div>
  	  <input type="file" name="fileToUpload" id="fileToUpload">
  	</div>
  
  	<div>
  		<input type="submit" value="Upload image"name="submit">POST</button>
  	</div>
  </form>
  

</body>
</html>





<?php

$target_dir="uploads/";
$target_file="$target_dir".basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){


$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check!==false){

  echo "file is an image-".$check["mime"].".";
  $uploadOk=1;

}else{

echo "file is not image";
$uploadOk=0;

}}?>

