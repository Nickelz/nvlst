



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Novelist</title>
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
  <link rel="stylesheet" href="./public/styles/account.css" type="text/css">


</head>

<body>
	<div class="container">
	<?php 
	require("./includes/nav.php");
	require("./includes/config.php");
    require("./models/api.php");
    $all_books = $book -> get_all();
            $all_authors = $book -> get_authors();
	 ?>
		
        <?php 


$arr = array("First_Name", "Last_Name", "Username", "Email");

$first=$_POST['First_Name'];
$last=$_POST['Last_Name'];
$username=$_POST['Username'];
$email=$_POST['Email'];

$qu = "UPDATE  `Users`
	
	  SET 	First_Name ='$first' , Last_Name ='$last' , Username ='$username' , Email='$email'
	
    WHERE `ID`=" .$_SESSION['UserID'];

if ($conn->query($qu) === TRUE) {
    
} else {
    
}

?>

		<div class="account">
    <h2>Account</h2>
    <form action="" method="POST">
<div class="information">
    <h5>GENERAL INFORMATION</h5>
    <hr>
<div class="info">

<?php 
$sq = $conn -> query("SELECT * FROM `users` WHERE `ID`= ".$_SESSION['UserID']);
$ro = $sq -> fetch_assoc()

?>

       <div> <span>First Name</span>
        <input type="text" name="First_Name"  value="<?php echo $ro["First_Name"]; ?>">
    </div>
        <div><span>Last Name</span>
        <input type="text" name="Last_Name" value="<?php echo $ro["Last_Name"]; ?>">
    </div>
    <div> <span>Username</span>
        <input type="text" name="Username" value="<?php echo $ro["Username"]; ?>">
    </div>
    <div> <span>Email</span>
        <input type="email" name="Email" value="<?php echo $ro["Email"]; ?>">
    </div>
</div>
</div>

<div class="but"><input class="button" type="submit" name="save" value="save"></div>

</form>

<form action="" method="POST">
    <div class="information">
        <h5>SHIPPING ADDRESS</h5>
        <hr>
<div class="info">
    <div> <span>COUNTRY</span>
        <select id="COUNTRY" name="COUNTRY">
            <option value="Saudia Arabia">Saudia Arabia</option>
            <option value="usa">usa</option>
            <option value="france">france</option>
        </select>
    </div>
        <div> <span>Full Name</span>
            <input type="text" name="FullName">
        </div>

        <div>
            <span>City</span>
        <select id="city" name="city">
            <option value="Dammam">Dammam</option>
            <option value="Al-hassa">Al-hassa</option>
            <option value="Alkhobar">Alkhobar</option>
        </select>
    </div>



        <div> <span>CONTACT NUMBER</span>
            <input type="text" name="phone">
        </div>

        <div> <span>ZIP Code</span>
            <input type="text" name="ZipCode" maxlength="5">
        </div>


</div>
</div>
</form>


<form action="" method="POST">
    <div class="information">
        <h5>PAYMENT INFORMATION</h5>
        <hr>
<div class="info">

    <div> <span>Name On Card</span>
        <input type="text" name="NameCard">
    </div>

    <div> <span>card number</span>
        <input type="text" name="CardNumber">
    </div>
    <div> <span>EXPIRATION DATE</span>
        <input type="month" name="month">
    </div>

    <div> <span>CONTACT NUMBER</span>
        <input type="text" name="phone">
    </div>
    <div> <span>ZIP Code</span>
        <input type="text" name="ZipCode">
    </div>


    
</div>
</div>
</form>

</div>
        

</div>
</body>

</html>