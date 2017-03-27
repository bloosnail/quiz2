<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>

		<p>Thanks! Stored name and email to cookie.</p>

		<?php
			#cookie expires one hour
			setcookie('fname', $_POST['fname'], time() + 3600);
			setcookie('lname', $_POST['lname'], time() + 3600);
			setcookie('email', $_POST['email'], time() + 3600);
		?>

	</body>
</html>