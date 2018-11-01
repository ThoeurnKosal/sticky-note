<?php  
	$delete = $_POST['delete'];
	require_once("databaseconfig.php");

    $sql = "DELETE FROM notes WHERE id = ".$_POST['delete'].";";
    $conn->query($sql);
    $sql = "SELECT * FROM notes";
    $result = $conn->query($sql);
    require_once("index.php");
?>