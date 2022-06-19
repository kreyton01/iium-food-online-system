<?php
	$conn = new mysqli("localhost","root","","laravel");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>