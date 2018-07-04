<!DOCTYPE html>
	<?php
	if(isset($_POST['close'])){
		SESSION_START();
		SESSION_UNSET();
		SESSION_DESTROY(); 
	}
	?>

<html >
	<head>
		<meta charset="UTF-8">
		<title>Login Form</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Login</title>
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
		</head>
		<h1 align="center" ><br></h1>
		<div id="login">
			<form method="POST" action="GUI_Login.php">
				<span class="fontawesome-user"></span>
					<input type="text" name="user" placeholder="Username">
			   
				<span class="fontawesome-lock"></span> 
					<input type="password" name="pass" placeholder="Password">
				
				<input type="submit" name="submit" value="submit" id="submit"/>
			</form>
	</body>
	
	
</html>
