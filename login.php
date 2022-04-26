<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label<Username:</label>
				<input type="text" id="user" name="user"  />
			</p>
			<p>
			</label<Password:</label>
			<input type="password" ide="pass" name="pass"  />
		</p>
		<p>
			<input type="submit" id="btn" value="Login"  />
		</p>

	</from>
</div clas="form group">
	<label for="username">Username</label>
	<input type="text" name="username" value="<?php echo $username; ?>" class="form-control"
</div>
<div class="form-group">
	<label for="password" name="password" class="form-control form-control-lg">
</div>
<p class="text-center">Not yet a member? <a href="signup.php"sign Up</a></a>p>
	</form>
</div>
</p>div>

</body>
</html>
