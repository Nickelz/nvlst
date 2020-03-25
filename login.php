<?php
require_once("./includes/config.php");

// TEMP
if(isset($error))
	foreach ($error as $error)
		echo "<p> " . $error . "</p>";

if ($user -> is_logged_in()) {
	echo "Logged in";
	header('Location: cart.html');
	exit;
}

if (isset($_POST['submit'])) {
	if ($user -> login($_POST['Username'], $_POST['Password'])) {
		$_SESSION['Username'] = $_POST['Username'];
		header('Location: cart.html');
		exit;
	} else {
		$error[] = "Wrong username/password";
	}
}
?>

<form action="" method="POST">
	<input type="text" name="Username" placeholder="Username" required>
	<input type="password" name="Password" placeholder="Password" required>

	<input type="submit" name="submit" value="Login">
</form>