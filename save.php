<?php
	require_once'config.php';
	
	if(ISSET($_POST['save'])){
		$image=$_POST['image'];
		$text=$_POST['text'];
		$username=$_POST['username'];
		$datetime=$_POST['datetime'];
		
		mysqli_query($conn, "INSERT INTO `users` VALUES('', '$image', '$text', '$username', '$datetime',)") or die(mysqli_error());
		header("location: index.php");
	}
?>