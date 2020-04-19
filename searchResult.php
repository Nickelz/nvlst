<?php
require("./includes/config.php");
$found_queries = array();
$possible_queries = array("s" => "Title", "pages" => "Pages", "isbn" => "ISBN", "date" => "Release_Date", "genre" => "Genre", "lang" => "Language", "rating" => "Rating");

foreach($possible_queries as $key => $value) {
	if (isset($_GET[$key]) && !empty($_GET[$key])) {
		$books = $book -> find($value, $_GET[$key]);
		$found_queries[$key] = $_GET[$key];
	}
}
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
	<link rel="stylesheet" href="./public/styles/searchResult.css" type="text/css">
</head>
<body>
	<div class="container">
		<?php require("./includes/nav.php"); ?>
		<div>
			<div class="content">
				<div class="controls">
					<a href="search.php"><img src="./public/images/icons8-long_arrow_left.svg" alt="back"> Go back to search</a>
					<ul>
					<?php foreach ($found_queries as $key => $value): ?>
							<li><?php echo $value; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<hr>
				<?php if($books === null): ?>
					<div class="noResult">
						<hr>
						<h2>Oops! No result found.</h2>
						<img src="./public/images/pluto-come-back-later.svg" alt="No result">
						<span>Please try searching another query, as this one did not come to a good result.</span>
					</div>
				<?php else: ?>
				<?php foreach($books as $book): ?>
				<div class="book">
					<img src="./public/images/covers/<?php echo $book["ISBN"]; ?>.jpg" alt="Cover">
					<div class="info">
						<div class="top">
							<span><?php echo $book["Title"]; ?></span>
							<span><?php echo $book["Author_Name"]; ?></span>
							<span><?php echo $book["Genre"]; ?></span>
							<span><?php echo $book["Language"]; ?></span>
							<span><?php echo $book["Release_Date"]; ?></span>
							<span><?php echo $book["Price"]; ?> SR</span>
							<span><?php echo $book["Provider"]; ?></span>
							<span><?php echo $book["Rating"]; ?></span>
							<span><?php echo $book["Pages"]; ?> pages</span>
						</div>
						<div class="bottom">
							<p><?php echo $book["des"]; ?></p>
						</div>
					</div>
				</div>
				<hr>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>