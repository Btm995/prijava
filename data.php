<?php
	require_once 'config.php';
	
	$data = array();
 	
	$query=mysqli_query($conn, "SELECT * FROM `users`") or die(mysqli_error());
	
	
	while($fetch=mysqli_fetch_array($query)){
		$data[] = $fetch;
	}
	
	echo json_encode($data);

?>