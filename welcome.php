<!DOCTYPE HTML>
<html>  
	<head>
		<link rel="stylesheet" href="CSS/main.css">
	</head>
	<body>

		<h1>Quiz 2</h1>
		<p>Sign up for free cookies!</p>
	
		<?php
			if (isset($_COOKIE["fname"])){
				echo "Hi, " . $_COOKIE["fname"] . ", you recently signed up with the email address: " .
				$_COOKIE["email"] . ", thank you!";
			}
		?>
	
		<form action="register.php" method="post">
			First name: <input type="text" name="fname"><br>
			Last name: <input type="text" name="lname"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
		</form>

	</body>
</html>
