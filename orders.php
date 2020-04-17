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
	$totalPrice= 0;
	 ?>
		
	
		
<div class="order">
    <h2>Account</h2>
<div class="orderInfo">
    <div class="top"><h4>Order ID NSAC10024761747</h4><div class="state"><img src="./public/images/icons8-error 1.svg"><span>PROCESSING</span></div><h4>Feb 26, 2020</h4></div>
    <hr>
    
        
        
    

    <div class="dit">
            <span>Book</span>
        <span>provider</span>
        <span>price</span>
        <span>TRANSACTION TYPE</span>
    </div>
        <div class="dit">
       <div class="bookNAme"><img src="./public/images/covers/9765456322123.jpg" alt="COVER" width="75" height="115"/><div><span>Ninth House</span><span class="a">Leigh Bardugo</span></div>
       </div> 
        <h5>The Novelist</h5>
        <h5>SR 42.34</h5>
        <div class="PURCHASED">PURCHASED</div>

    </div>
    
        <div class="dit">
       <div class="bookNAme"><img src="./public/images/covers/9765456322123.jpg" alt="COVER" width="75" height="115"/><div><span>Ninth House</span><span class="a">Leigh Bardugo</span></div></div> 
        <div><h5>The Novelist</h5></div>
        <div><h5>SR 42.34</h5></div>
        <div class="rent">rent</div>

    </div>

    
</div>

</div>
</body>

</html>