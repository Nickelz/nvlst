<?php
	require("./includes/config.php");

	if(isset($_GET['order']) && $_SESSION['UserID']) {
		$date= date("Y/m/d l H:i");
		if($conn -> query("INSERT INTO `OrderHistory` (`UserID`, `Books`, `Date`) VALUES ('{$_SESSION["UserID"]}', '{$_GET["order"]}', '{$date}')")) {
			$_SESSION['Cart'] = array();
		} else {
			header("Location: cart.php?status=failed");
			exit;
		}
	} else {
		header("Location: cart.php?status=emptyCartOrNoSession");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./public/styles/main.css">
	<link rel="stylesheet" href="./public/styles/checkout.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<script src="./public/scripts/form-validation.js"></script>
</head>
<body>
	<div class="mainContainer">
		<img id="logo"src="./public/images/Logo.svg" alt="The Novelist">
		<h1>Thanks for your order!</h1>
		<img src="./public/images/pluto-order-completed.svg" alt="Order Complete">
		<p>Thanks for placing order <span>NSAC<?php echo $conn -> insert_id; ?></span><br>We will send you a notification within 5 days when it ships.</p>
		<a href="discover.php">&lt;&lt;&nbsp;&nbsp;Discover more</a>
	</div>
</body>
</html>