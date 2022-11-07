<?php require_once("config.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Image Upload in PHP and MYSQL database </title>
</head>
<body>
	<?php
		if(isset($_POST['form_submit']))
		{	
			$text=$_POST['text'];
$folder = "uploads/";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}

    if ($_FILES["image"]["size"] > 1048576) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size.';
}
if(!isset($error))
{

move_uploaded_file($file,$target_file); 
$result=mysqli_query($dbc,"INSERT INTO users(image,text) VALUES('$image','$text')"); 
if($result)
{
	$image_success=1;  
	header("location:imageform.php");
}
else 
{
	echo 'Something went wrong'; 
}
}
		}
if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}
}
	?> 
	<div class="container">
	<?php if(isset($image_success))
		{
		echo '<div class="success">Image Uploaded successfully</div>'; 
		} ?>
<form action="" method="POST" enctype="multipart/form-data">
	<label>Image </label>
	<input type="file" name="image" class="form-control" required="" >
	<label>Text</label>
	<input type="text" name="text" class="form-control" required="">
	<br><br>

	<button type="submit" name="form_submit" class="btn-primary" action="account.php">Upload</button>
</form>
</div>

</body>
</html>
