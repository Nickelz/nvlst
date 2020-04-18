<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Novelist</title>
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
  <link rel="stylesheet" href="./public/styles/mybooks.css" type="text/css">

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
		
        

		<div class="myBooks">
			<div class="segmentedControl">
				<input type="radio" name="segment" id="All" checked>
				<label for="All">All</label>

				<input type="radio" name="segment" id="Purchased">
				<label for="Purchased">Purchased</label>

				<input type="radio" name="segment" id="Rented">
				<label for="Rented">Rented</label>
			</div>

			<div class="books">
            <?php
        $sq = $conn -> query("SELECT * FROM `orderhistory` WHERE `UserID`= ".$_SESSION['UserID']);
        while ($ro = $sq -> fetch_assoc()){
            $x=$ro['Books'];
                $sqs = $conn -> query("SELECT * FROM `books` WHERE `ID` IN ($x)");
   while ($bookRow = $sqs -> fetch_assoc()){

?>
				<ul>
					<li>
						<span><?php echo $bookRow["Title"]; ?></span>
					</li>
					<li>
						<img src="./public/images/covers/<?php echo $bookRow["ISBN"]; ?>.jpg" alt="COVER" alt="Book" width="75" height="115">
					</li>
				</ul>
				<?php
   }}
        ?>
				<img src="./public/images/shelf.svg" alt="Shelf" id="shelf">
			</div>
		</div>
        

</div>
</body>

</html>