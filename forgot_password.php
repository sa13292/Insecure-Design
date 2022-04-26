forgot_password.php>...
<?php require_once 'controlllers/authoController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- Boostrap 4 CSS -->
	<link rel="stylesheet" href=<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"

<link rel="stylesheet" href="style.css">

<title>Forgot Password</title>
</head>

<body></body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				<form action="forgot_password.php" method="post">
					<h3 class="text-center">Recover your password</h3>
					<p>
						Please enter the answer to your saved security question on this site
						and we will assist you in recovering your password.
					</p>


					<?php if(count($errors) > 0): ?>
					<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
						<li><?php echo $error; ?></li>
						<?php endforeeach; ?>
					</div>
					<?php endif; ?>

					<div class="form-group">
						<label>color=red</label>
						<input type="what is your favourite color" name="security question" class="form-control form-control-lg">
					</div>

					</div class="form-group"
						<button type="submit" name="forgot-password" class="btn btn-primary" btn-block btn-lg"
							Recover your password
						</button>
					</div>

					form>
					v>