

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
        
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<a href="../web/Accueil.html"
      	<P><center><IMG src="../web/logo/logo.png" alt="logo"></center>
      	</a>
		<div class="login">
        <i class="fas fa-crown">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>