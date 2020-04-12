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
</head>

<body>
	<div class="container">
	<?php require("./includes/nav.php"); ?>
		<div class="myCart">
				<h1>My Cart</h1>
				<span>(8 Items)</span>
				<div class="books">
					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>

					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>

					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>
					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>

					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>

					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>

					<ul id="book">
						<li id="bookImg">
							<img src="./public/images/book-test.jpg" alt="Book">
						</li>
						<li id="bookTitle">Ninth House</li>
						<li id="bookAuthor">Leigh Bardugo</li>
						<li id="bookPrice">SR 42.34</li>
					</ul>
				</div>
		</div>
		<div class="checkout">
			<h1>Checkout</h1>
			<div class="infoSection">
				<h5>Account Information</h5>
				<div>
					<img src="./public/images/icons8-user.svg" alt="Name">
					<span>Abdulaziz Ibrahim</span>
				</div>
				<div>
					<img src="./public/images/icons8-email.svg" alt="Email">
					<span>mk@ahmed.com</span>
				</div>
			</div>
			<div class="infoSection">
				<h5>Shipping Information</h5>
				<div>
					<img src="./public/images/icons8-user.svg" alt="Name">
					<span>Abdulaziz Ibrahim</span>
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
					<li>SAR 337.85</li>
				</ul>
				<ul>
					<li>Value Added Tax (VAT):</li>
					<li>SAR 50.808</li>
				</ul>
				<ul>
					<li>Shipping:</li>
					<li>Free</li>
				</ul>
				<ul>
					<li>Total:</li>
					<li>SAR 389.528</li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>