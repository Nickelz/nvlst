<?php
require("./includes/config.php");

if ($user -> is_logged_in()) {
	echo "Already logged in";
	header('Location: cart.html');
	exit;
}

$arr = array("First_Name", "Last_Name", "Username", "Email", "Password");

if(isset($_POST["Username"])) {
	foreach($arr as $field) {
		$arr[$field] = $conn -> real_escape_string(stripslashes($_POST[$field]));
		echo $arr[$field] . "<br>";
	}

	$hashed_password = password_hash($arr['Password'], PASSWORD_BCRYPT);
	$activasion = md5(uniqid(rand(), true));

	$query = "INSERT INTO `Users` (`First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Active`)
	VALUES (
		\"{$arr['First_Name']}\",
		\"{$arr['Last_Name']}\",
		\"{$arr['Username']}\",
		\"{$arr['Email']}\",
		\"{$hashed_password}\",
		\"{$activasion}\"
	);";

	echo $query . "<br>";

	if ($conn -> query($query) === TRUE) {
		echo "User created successfully!";
		header('Location: index.php?action=registered');
		exit;
	} else {
		echo "Failed to create user: " . $conn -> error;
	}
} else {
	echo "\$_POST[Username] is not set<br>";
}
?>

<form action="" method="POST">
	<input type="text" name="First_Name" placeholder="First Name" required>
	<input type="text" name="Last_Name" placeholder="Last Name" required>
	<input type="text" name="Username" placeholder="Username" required>
	<input type="email" name="Email" placeholder="Email" required>
	<input type="password" name="Password" placeholder="Password" required>

	<input type="submit" value="Register">
</form>