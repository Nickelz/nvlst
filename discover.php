<?php
require("./includes/config.php");
$all_books = $book->get_all();
$all_authors = $book->get_random_authors(8);
if (isset($_COOKIE['recent'])) {
	$recentlist = $_COOKIE['recent'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/discover.css" type="text/css">
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
					if (isset($_COOKIE['recent'])) {
						$recentResult = $conn->query("SELECT * FROM `Books` WHERE `ID` IN ($recentlist)") or die($conn->error);
						while ($recentRow = $recentResult->fetch_assoc()) { ?>
							<div class="book">
								<span><?php echo $recentRow['Title']; ?></span>
								<span><?php echo $recentRow['Author_Name']; ?></span>
							</div>
					<?php }
					} ?>
				</div>
			</div>

			<div class="browse">
				<div class="booksContainer">
					<h3>Browse</h3>
					<div class="books">
						<?php
						$j = 0;
						foreach ($all_books as $book_row) :
							if ($j == 15) { // number of books in discover
								break;
							} else
								$j++
						?>
							<div class="book">
								<?php echo "<a href=proudctView.php?id=" . $book_row['ID'] . ">" ?>
								<img src="./public/images/covers/<?php echo $book_row["ISBN"]; ?>.jpg" alt="Book">
								</a>
								<span><?php echo $book_row["Title"]; ?></span>
								<span><?php echo $book_row["Author_Name"]; ?></span>
							</div>
						<?php
	
						endforeach;
						?>
	
					</div>
				</div>
				<div class="authorContainer">
					<h3>Authors</h3>
					<div class="authors">
						<ul>
							<?php foreach ($all_authors as $author) : ?>
								<a href="<?php echo "searchResult.php?s=" . urlencode($author); ?>"><li><?php echo $author; ?></li></a>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
</body>

</html>