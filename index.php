<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<!-- The input forms where the user apply the information for their account. It uses input type such as text, password, and submit -->
    <form action="handleForms.php" method="POST">
		<p><input type="text" placeholder="Username here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Login" name="loginBtn"></p>
	</form>

<!-- If the user wants to logout, it will clear the saved username and password which directs to unset.php-->
	<form action="unset.php" method="POST">
		<p><input type="submit" value="Logout" name="logoutBtn"></p>
	</form>

	<!-- The variable will be saved in different php file -->
    <?php session_start(); ?>

	<?php
	// Shows the username after logging in
	if(isset($_SESSION['firstName'])) {
		ob_start(); // The purpose of this is to remove the previous echo results. This is the initial scope of what should be deleted. The covered scope will be removed.
		echo "<p>User logged in:".$_SESSION['firstName']. "</p>";
	}
	?>		

	<?php
	// Shows the password after logging in
	if(isset($_SESSION['password'])) {
		echo "<p>User Password:".$_SESSION['password']. "</p>";
	}
	?>	

	<?php
	// Shows the error prompt that there is an existing account/username
	if(isset($_SESSION['error'])){
		ob_clean(); // The purpose of this is to remove the previous echo results. This defines the final scope of what should be deleted. The covered scope will be removed.
		echo "<p>". $_SESSION['firstName']. " ". $_SESSION['error']. "</p>";
		unset($_SESSION['error']);
	}
	?>

</body>
</html>