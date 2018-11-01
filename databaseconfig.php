<?php
	define("HOST_NAME","127.0.0.1");
	define("USER_NAME","root");
	define("PASSWORD","");
	define("DB_NAME","khnote");

	$conn = new mysqli(HOST_NAME, USER_NAME,
		PASSWORD,DB_NAME);
	if($conn ->connect_error){
		die("Connection failed: " .$conn ->connect_error);
	}
?>