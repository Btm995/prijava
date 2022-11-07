<?php  $search = $_POST['search'];


$servername = "localhost";
$username = "root";
$password = "";
$db = "data";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Image Upload in PHP and MYSQL database </title>
</head>
<body>


<form action="imageform.php" method="post">
Search <input type="text" name="search"><br>
<input type ="submit">


<table width="25%" border="0">
<tbody><tr> 
    
<div class="container_display">
	<table cellpadding="10">
		<tr>
			<th> Image</th>
			<th>Text</th>
      <th>username</th>
      <th>Text</th>
		</tr>
		<?php
		
$sql = "select * from users where text like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
		
			{
				echo '<tr> 
                  <td><img src="uploads/'.$row['image'].'" height="200"></td> 
                  <td>'.$row['text'].'</td> 
                  <td>'.$row['username'].'</td> 
                  <td>'.$row['datetime'].'</td> 

				</tr>';

} 
    
}
} else {
	echo "0 records";
}

$conn->close();

?>
		
	</table>
	</div>


<?php

?>
   
       </tbody></table>
   </form>
</body>
</html>
