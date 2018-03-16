<!DOCTYPE html>
<html>
<head>
	<title>Webchat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id="info">
			<h2>Login Here!</h2>

			<form action="login.php" method="post">
			
				<input type="text" name="username" placeholder="Username">
				
				<input type="Password" name="password" placeholder="Password">
				<button>Login</button><br>

			</form>

			<form action="signup.php" method="post">
				<br><p><b>don't have an account yet? then</b></p>
				<h2>Sign Up Here!</h2>			
				<input type="text" name="username" placeholder="Username">
				<input type="text" name="email" placeholder="Email">
				<input type="Password" name="password" placeholder="Password"><br>
				<button>SignIn</button><br>
			</form>
		</div>
	</div>

</body>
</html>