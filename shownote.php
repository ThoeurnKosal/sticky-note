<?php  
	require_once('databaseconfig.php');
	// session_start();
	$name = $_SESSION['username'];
	$sql = "select * from notes WHERE username='$name'";


	$result = $conn->query($sql);
	while($row = $result->fetch_object()){
		echo "	<div class='grid-item'>  
					<div class='divtitle'>
						<div style='margin: 0 auto; width: 100%;' alt='Brand' data-toggle='modal' data-target='#exampleModal2' data-whatever='@mdo'  onclick='editNote('$row->id)'>
							<b class='title'> 
								$row->title 
							</b> 
						</div>
					</div>
					<div class='textnote' alt='Brand' data-toggle='modal' data-target='#exampleModal2' data-whatever='@mdo' onclick='editNote($row->id)'>
						$row->content
						<br>
					</div>
					<div>
						<form name='removenote' action='removenote.php' method='post'>
							<button type='submit' name='delete' value='$row->id' class='buttondelete'>
								<img class='removetext' src='public/img/remove.png' value='$row->id' name='removeid'>
							</button>	
						</form>
					</div>
				</div>";
				}
		
?>