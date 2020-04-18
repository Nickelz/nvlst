<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Novelist</title>
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/cart.css" type="text/css">
	<link rel="shortcut icon" href="./public/images/favicon.png" type="image/x-icon">
</head>

<body>
	<div class="container">
	<?php 
	require("./includes/nav.php");
	require("./includes/config.php");
	require("./models/api.php");
	$totalPrice= 0;

	if(!isset($_SESSION['FullName']))
		header('Location: login.php');
	
	 ?>
		
	
		<div class="myCart">
				<h1>My Cart</h1>
				<div class="books">
			

				<?php
				if(!empty($_SESSION['Cart'])){
				$whereIn = implode(',', $_SESSION['Cart']);

				 $cartResult = $conn -> query("SELECT * FROM `Books` WHERE `ID` IN ($whereIn)") or die($conn -> error);
			
 				while($cartRow = $cartResult -> fetch_assoc())  { 
					 $totalPrice += $cartRow["Price"];
					 ?>
				
				
		
				
				<div class="books">
					<ul id="book">

						
						<?php echo "<a href=deleteFromCart.php?id=" . $cartRow['ID'] . ">" ?>
						<li><input type="image" src="./public/images/icons8-delete_bin.svg" alt="DELETE"></li>
						</a>



						<li id="bookImg">
						
						

						<img src="./public/images/covers/<?php echo $cartRow["ISBN"]; ?>.jpg" alt="Book">
						</li>
						<li  id="bookTitle"><?php echo  $cartRow["Title"]  ?></li>
						<li id="bookAuthor"><?php echo $cartRow["Author_Name"] ?></li>
						<li id="bookPrice"><?php echo $cartRow["Price"]?> SR </li>
					</ul>
					
			
					
				</div>
				<?php ;
				}
			}
				else{ //echo "Cart Empty";
		
				?>

				<div><img src="./public/images/empty.png" width=550 height=400></div>
				<?php  }  ?>
		</div>
		<div class="checkout">
			<h1>Checkout</h1>
			<div class="infoSection">
				<h5>Account Information</h5>
				<div>
					<img src="./public/images/icons8-user.svg" alt="Name">
					<span><?php echo $_SESSION['FullName'] ?></span>
				</div>
				<div>
					<img src="./public/images/icons8-email.svg" alt="Email">
					<span><?php echo $_SESSION['Email'] ?></span>
				</div>
			</div>
			<div class="infoSection">
				<h5>Shipping Information</h5>
				<div>
					<img src="./public/images/icons8-user.svg" alt="Name">
					<span><?php echo $_SESSION['FullName'] ?></span>
				</div>
				<div>
					<img src="./public/images/icons8-address.svg" alt="Address">
					<span>22A1, Unnamed Road, Khobar, Saudi Arabia</span>
				</div>
				<div>
					<img src="./public/images/icons8-phone.svg" alt="Phone">
					<span>+966-549-412778</span>
				</div>
			</div>
			<div class="infoSection">
				<h5>Payment Information</h5>
				<div>
					<img src="./public/images/icons8-credit_card.svg" alt="Card">
					<span>1234 5678 9123 3213</span>
				</div>
				<div>
					<img src="./public/images/icons8-checkmark.svg" alt="Billing Address">
					<span>Billing Address same as Shipping Address</span>
				</div>
			</div>
			<div class="totals">
				<ul>
					<li>Subtotal:</li>
					<li><?php echo $totalPrice ?> SAR </li>
				</ul>
				<ul>
					<li>Value Added Tax (VAT):</li>
					<li><?php echo $totalPrice*0.05 ?> SAR</li>
				</ul>
				<ul>
					<li>Shipping:</li>
					<li>Free</li>
				</ul>
				<ul>
					<li>Total:</li>
					<li><?php echo $totalPrice+($totalPrice*0.05) ?> SAR</li>
					
				</ul>
				<ul>
				<?php if(isset($whereIn)){ ?>
				<li><a <?php echo "href=./checkout.php?order=$whereIn " ?> class="button"> Place Order</a>
				<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>