<!DOCTYPE html>
<html>
<head>
	<title>Khmer Note</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./public/vendor/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src= "./public/vendor/jquery/jquery-3.2.1.min.js"></script>
  
  <script type="text/javascript" src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>

<body style="background-color: #F4FEFD ; font-size:30px">
<center >
	<p >
		Wrong Username or Password
	</p>
	<br>
	<p class="loginStyle" style="color:#F9DF3C">Khmer Note</p>
	<form class="logininput" role='form' method="post" name="logForm" action="postLogin.php">
		<p style="color:#6DF82C"><b> Please sign in</b></p>
		<input  type="text" name="username"  placeholder="Username">
		<br>
		<br>
		<input  type="password" name="password"  placeholder="Password">
		<br>
		<br>
		<input  type="checkbox" value="r" name="rememberMe"><b style="color:#F55741" > Remember Me</b>
		<br>
		<br>
		<button style="background-color: #54F906"  type="submit">Login</button>
		
		<button style="background-color: #35F8C9"  type="submit">
		<a href="register.php">Register </a></button>
	</form>
		
	</form>
</center>
</body>
</html>