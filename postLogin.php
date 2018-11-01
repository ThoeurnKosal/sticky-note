<?php
	if(isset($_POST['username']) && $_POST['username']!= ''){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		require_once('databaseconfig.php');
		//Check user in database
		// $hostname = '127.0.0.1';
		// $usernameDB = 'root';
		// $passwordDB = '';
		// $dbname = 'khnote';
		// //Create connection to mysql database
		// $conn = new mysqli($hostname, $usernameDB, $passwordDB, $dbname);

		// if($conn->connect_error){
		// 	die('Fail to connect to mysql database');
		// }

		require_once('salt.php');
		$password = crypt($password, KEY_SALT);

		$sql = "select * from accounts";

		$result = $conn->query($sql);
		echo $result->num_rows;
		if($result->num_rows > 0){	
		// echo($username);
		// echo($password);		
			session_start();
			$_SESSION['username'] = $username;
			if(isset($_POST['rememberMe'])){
				setcookie('username', $username, time()+60*60*24);
			}
			header('Location: index.php');
		}else{
			header('Location: login.php');
			// echo "hahahahha khos";
		}
	}else{
		header('Location: login.php');
		// echo " ors ey yey";
	}
?>