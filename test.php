<!DOCTYPE html>
<html>
<head>
	<title>Test PHP</title>
</head>
<body>
<!-- THE STORY BEGAN HERE! -->

<form action="test.php" method="post">
	<input type="text" name="username" />
	<input type="text" name="email" />
	<input type="submit" value="Register" />
</form>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo	'Thanks for Registring! <br />',
				'Username: ', htmlentities($_POST['username']), '<br />',
				'Email: ', htmlentities($_POST['email']), '<br />'; 	
	} else {
?>

<form action="test.php" method="post">
	<label for="username">Username:</label>
	<input type="text" name="username" />
	<label for="email">Email:</label>
	<input type="text" name="email" />
	<input type="submit" value="Register" />
</form>

<?php } ?>

<!-- THE STORY END HERE! -->
</body>
</html>
