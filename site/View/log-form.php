<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	?>
	<h2>Login Form</h2>
	<div class="box">
					
					<form action="account-page.php" id="login-form" method="post">
						<fieldset>
							<div class="field"><label for="username">Username:</label><input type="text" class="text" name="username" required/></div>
							<div class="field"><label for="pass">Password:</label><input type="password" class="password" name="pass" required/></div>
							<div class="wrapper">
								<input type="submit" name="submit" value="Sign In" class="submit fleft" />
								<input type="submit" name="submit" value="Sign Up" class="submit fright" />
							</div>
						</fieldset>
					</form>
				</div>
</body>
</html>
