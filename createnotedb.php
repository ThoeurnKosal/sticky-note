<?php
session_start();
	$name = $_SESSION['username'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	require_once('databaseconfig.php');

	$sql = "insert into notes (title,content,username) value('$title','$content','$name')";
	$result = $conn -> query($sql);
	require_once('index.php');
?>