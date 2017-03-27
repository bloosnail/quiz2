<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>

		<p>Thanks! Stored name and email to cookie.</p>

		<?php
			setcookie('fname', $_POST['fname']);
			setcookie('lname', $_POST['lname']);
			setcookie('email', $_POST['email']);
		?>

	</body>
</html>