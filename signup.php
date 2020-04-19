<?php
require("./includes/config.php");

if ($user -> is_logged_in()) {
	header('Location: discover.php');
	exit;
}

$arr = array("First_Name", "Last_Name", "Username", "Email", "Password");

if(isset($_POST["Username"])) {
	foreach($arr as $field) {
		$arr[$field] = $conn -> real_escape_string(stripslashes($_POST[$field]));
	}

	$hashed_password = password_hash($arr['Password'], PASSWORD_BCRYPT);
    $activasion = md5(uniqid(rand(), true));
    
    
	$query = "INSERT INTO `Users` (`First_Name`, `Last_Name`, `Username`, `Email`, `Password`)
	VALUES (
		\"{$arr['First_Name']}\",
		\"{$arr['Last_Name']}\",
		\"{$arr['Username']}\",
		\"{$arr['Email']}\",
		\"{$hashed_password}\"
    );";

	if ($conn -> query($query) === TRUE) {
        $user -> login($arr['Email'], $arr['Password']);
		header('Location: discover.php?action=registered');
		exit;
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/styles/main.css">
    <link rel="stylesheet" href="./public/styles/signUp.css">
    <script src="./public/scripts/form-validation.js"></script>
</head>

<body>
    <div class="mainContainer">
        <img id="logo" src="./public/images/Logo.svg" alt="The Novelist">
        <div class="container">

            <h2>Sign up</h2>

            <form action="signup.php" onsubmit="return validate(this)" method="POST">
                <hr>
                <div class="father">
                    <div class="chiled-left">
                        <div class="first">
                            <span> Firstname</span>
                            <input type="text" name="First_Name" tabindex="1">
                        </div>

                        <div class="user">
                            <span> USERNAME</span>
                            <input type="text" name="Username" tabindex="3">
                        </div>

                        <div class="pwd">
                            <span> PASSWORD </span>
                            <input type="password" name="Password" tabindex="5">
                        </div>
                    </div>

                    <div class="chiled-right">
                        <div class="last">
                            <span> LASTNAME</span>
                            <input type="text" name="Last_Name" tabindex="2">
                        </div>
                        <div class="em">
                            <span>EMAIL</span>
                            <input type="email" name="Email" tabindex="4">
                        </div>

                        <div class="conf">
                            <span> CONFIRM PASSWORD</span>
                            <input type="password" name="conf-pass" tabindex="6">
                        </div>
                    </div>
                </div>
                <input class="bot" type="submit" name="signup" value="SIGN UP">
            </form>

            <a class="log" href="./login.php">LOG IN</a>
            <div class="back-To-Browsing">
                <img src="./public/images/icons8-long_arrow_left.svg" alt="arrow" width="21px">
                <a href="#">Back to browsing</a>
            </div>
        </div>
    </div>
</body>

</html>