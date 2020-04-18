<?php
require("./includes/config.php");

// TEMP
if(isset($error))
	foreach ($error as $error)
		echo "<p> " . $error . "</p>";

if ($user -> is_logged_in()) {
	echo htmlspecialchars($_SESSION['Email'], ENT_QUOTES);
	header('Location: discover.php');
	exit;
}

if (isset($_POST['submit'])) {
	if ($user -> login($_POST['Email'], $_POST['Password'])) {
		header('Location: login.php');
		exit;
	} else {
		$error[] = "Wrong email/password";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/styles/main.css">
	<link rel="stylesheet" href="./public/styles/login.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Login</title>
</head>
<body>
	<div class="mainContainer">
		<img id="logo"src="./public/images/Logo.svg" alt="The Novelist">
		<div class="container">
			<h1>Login</h1>
			<hr>
			<form action="" method="POST">
				<span>Email</span>
				<input type="email" name="Email" required>

				<span>Password</span>
				<input type="password" name="Password" required>

				<input type="submit" name="submit" value="Login">
			</form>
			<a class="signUp" href="./signup.php">Sign Up</a>
			<div class="backToBrowsing">
				<img src="./public/images/icons8-long_arrow_left.svg" alt="arrow" width="21px">
				<a href="./discover.php">Back to browsing</a>
			</div>
		</div>
	</div>
</body>
</html>