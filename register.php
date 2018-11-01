<!DOCTYPE html>
<html>
<head>
	<title>Register New Account</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./public/vendor/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src= "./public/vendor/jquery/jquery-3.2.1.min.js"></script>
  
  <script type="text/javascript" src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body style="background-color:#800080">

	<center>
	<br>
	<h1 style="color: #FFFF00"><b>Khmer Note</b></h1>
	<p class="loginStyle " style="color:#26FA00">Register for a new account</p>
	<form enctype="multipart/form-data" role='form' method="post" name="logForm" action="processRegister.php">
		<p style="color:#6DF82C"><b> Please sign up </b></p>
		<input  type="text" name="username"  placeholder="Username">
		<br>
		<br>
		<input  type="password" name="password"  placeholder="Password">
		<br>
		<br>
		

		<div class="form-group">
		  <label class="col-md-4 control-label" for="Networking_Reception"></label>
		  <div class="col-md-4" style="color:#FFFF00 "> 
		  Sex : &nbsp; &nbsp;
		    <label class="radio-inline" for="Networking_Reception-0">
		      <input type="radio" name="sex" id="Male" value="F" style="color: #FFFF00">
		      Male &nbsp;
		    </label> 
		    <label class="radio-inline" for="Networking_Reception-1">
		      <input type="radio" name="sex" id="Female" value="M" style="color: #FFFF00">
		      Female
		    </label>
		  </div>
		</div>



	    <br>
	    <input type="file" name="photo"><br/>
	    <br>
	    <br>
		<button style="background-color: #35F8C9"  type="submit">Register</button>
		
	</form>
	</center>
	<br>
	


</body>
</html>