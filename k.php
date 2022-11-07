<html>
<title>PHP MYSQL SEARCH ENGINE</title>
<head>
</head>

<body>
<form action="k.php" method="POST">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
<center><h3>Search Mysql Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" name="name" size="50"></td>
	<td><input type="submit" name="submit"></td>
</tr>


</table></center>
</form>
<?php

	
	$con = @new mysqli('localhost', 'root', '', 'data'); 
	if ($con->connect_error) {
		echo "Error: " . $con->connect_error;
		exit();
		}
		
	
	echo '<br />';

    // Run Query
	
	if($_REQUEST['submit']){
    $name = $_POST['name'];
	
	if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
	}else{
		$make = '<h4>No match found!</h4>';
	    $select = "SELECT * FROM users WHERE text LIKE '%$name%'";
	    $result = mysqli_query($con, $select);
		while ($row = mysqli_fetch_array($result))
		{
			echo $row['text']; echo"<img src='uploads/".$row['image']."' >";echo $row['username'];echo $row['datetime'];
			echo '<br />';
            
		}}
 
	
	// Close mysql connection
	mysqli_close($con);
	}

?>
</body>

</html>