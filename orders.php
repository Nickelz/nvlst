<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Novelist</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/orders.css" type="text/css">

</head>

<body>
	<div class="container">
		<?php
		require("./includes/nav.php");
		require("./includes/config.php");
		require("./models/api.php");
		$all_books = $book->get_all();
		$all_authors = $book->get_authors();
		?>
		<div class="order">
			<h2>Orders</h2>
			<?php
			$sq = $conn->query("SELECT * FROM `orderhistory` WHERE `UserID`= " . $_SESSION['UserID']);
			while ($ro = $sq->fetch_assoc()) {
			?>
				<div class="orderInfo">
					<div class="top">
						<h4> NSAC<?php echo $ro["OrderID"]; ?></h4>
						<h4 class="right"><?php echo $ro["Date"]; ?></h4>
					</div>
					<hr>

					<div class="dit">
						<span>Book</span>
						<span>provider</span>
						<span>price</span>
						<span>TRANSACTION TYPE</span>
					</div>

					<?php
					$x = $ro['Books'];
					$sqs = $conn->query("SELECT * FROM `books` WHERE `ID` IN ($x)");
					while ($bookRow = $sqs->fetch_assoc()) {
					?>
						<div class="dit">
							<div class="bookNAme"><img src="./public/images/covers/<?php echo $bookRow["ISBN"]; ?>.jpg" alt="COVER" width="75" height="115" />
								<div><span><?php echo $bookRow["Title"]; ?></span><span class="a"><?php echo $bookRow["Author_Name"]; ?></span></div>
							</div>
							<h5><?php echo $bookRow["Provider"]; ?></h5>
							<h5><?php echo $bookRow["Price"]; ?> SR</h5>
							<div class="PURCHASED">PURCHASED</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</body>

</html>