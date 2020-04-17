<?php
require("./includes/config.php");
require("./models/api.php");
$all_books = $book -> get_all();
$all_authors = $book -> get_authors();
$recentlist=$_COOKIE['recent'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Novelist</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/discover.css" type="text/css">
	<link rel="shortcut icon" href="./public/images/favicon.png" type="image/x-icon">
</head>

<body>
	<div class="container">
	<?php require("./includes/nav.php"); ?>

		<div class="discover">
			<h1>Discover</h1>
			<div class="foryou">
				<h3>Recently Viewed</h3>
				<div class="books">
				<?php 
							$recentResult = $conn -> query("SELECT * FROM `Books` WHERE `ID` IN ($recentlist)") or die($conn -> error);
			
							while($recentRow = $recentResult -> fetch_assoc())  { ?>
					<div class="book">

						
							<div class="cover"></div>
							<?php echo "<a href=proudctView.php?id=" . $recentRow['ID'] . ">" ?>
							<img src="./public/images/covers/<?php echo $recentRow["ISBN"]; ?>.jpg" style="width: 50px; height: 70px; left:5px;" alt="Book">
							</a>
							<div class="info">
							<span><?php echo $recentRow['Title'];?></span>
							<span>by Liz Moore</span>
							<div class="rating">
								<?php for ($i=0;$i<$recentRow["rating"];$i++) { ?>	
								<img src="./public/images/icons8-star.svg" alt="Star" width="6%">
								<?php } ?>
								<!-- <span>4.1</span> -->
							</div>
							<span>because you rented <strong>eleanor & park</strong> by <strong>Rainbow Rowell</strong></span>
						</div>
					
					</div>
					<?php
							}
							?>
				</div>
			</div>

			<div class="browse">
				<h3>Browse</h3>
				<div class="books">
					<?php
					foreach($all_books as $book_row):
					?>
					<div class="book">
						<?php echo "<a href=proudctView.php?id=" . $book_row['ID'] . ">" ?>
						<img src="./public/images/covers/<?php echo $book_row["ISBN"]; ?>.jpg" style="width: 138px; height: 204px;" alt="Book">
						</a>
						<span><?php echo $book_row["Title"]; ?></span>
						<span><?php echo $book_row["Author_Name"]; ?></span>
						
					</div>
					<?php
					endforeach;
					?>
				</div>
			</div>

			<div class="authors">
				<h3>Authors</h3>
				<div class="authorsContainer">
					<?php foreach($all_authors as $author): ?>
					<div class="author">
						<img src="<?php echo GOODREADS::get_author_image($author) ?>" alt="Author">
						<span><?php echo $author; ?></span>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
</body>

</html>