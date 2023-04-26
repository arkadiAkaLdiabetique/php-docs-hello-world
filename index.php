<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body {
			background-color: #3498db;
			font-family: Arial, sans-serif;
			color: #fff;
		}
		h1 {
			text-align: center;
			margin-top: 100px;
			font-size: 48px;
			text-shadow: 2px 2px #000;
		}
		form {
			width: 350px;
			margin: 0 auto;
			margin-top: 50px;
			background-color: rgba(0,0,0,0.5);
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
		}
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: none;
			background-color: rgba(255,255,255,0.2);
			border-radius: 3px;
			color: #fff;
		}
		input[type=submit] {
			width: 100%;
			padding: 10px;
			background-color: #2ecc71;
			border: none;
			border-radius: 3px;
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s ease;
			margin-bottom: 10px;
		}
		input[type=submit]:hover {
			background-color: #27ae60;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<form method="post" action="index.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>
		<input type="submit" value="Login">
	</form>

	<?php 
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if (($username == "bernard" || $username == "louis" || $username == "salim" || $username == "tanguy") && $password == "admin") {
				// L'utilisateur est connecté
				session_start();
				$_SESSION['username'] = $username;
				header("Location: https://www.youtube.com/watch?v=Ggq0c4e2hjA&pp=ygUVamVhbiBjbGF1ZGUgdmFuIGRhbW1l");
				exit;
			} else {
				// Les informations de connexion sont incorrectes
				header("Location: https://www.youtube.com/watch?v=CVcKI3t9RvQ");
				exit;
			}
		}
	?>
</body>
</html>
