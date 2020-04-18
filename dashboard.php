<?php
require("./includes/config.php");
if(!$user -> is_logged_in()) {
	header("Location: login.php");
	exit;
}

if(isset($_POST["submit"])) {
	$errors = array();
	$file_name = $_FILES['Cover']['name'];
	$file_tmp = $_FILES['Cover']['tmp_name'];
	$file_ext = strtolower(end(explode('.',$_FILES['Cover']['name'])));
	$extensions = array("jpg");

	if(in_array($file_ext, $extensions) === false) $errors[] = "extension not allowed, please choose a JPG file.";

	if(empty($errors) == true) {
		$target_directory = "./public/images/covers/";
		echo "FULL PATHL: " . $target_directory . $file_name;
		move_uploaded_file($file_tmp, $target_directory . $file_name);
		rename($target_directory . $file_name, $target_directory . $_POST['ISBN'] . "." . $file_ext);
		echo $book -> add($_POST['Title'], $_POST['Author'], $_POST['Provider'], $_POST['Genre'], $_POST['Language'], $_POST['Release_Date'], $_POST['ISBN'], $_POST['Number_of_Pages'], $_POST['Price']);
		header("Location: dashboard.php?sc=books");
	} else print_r($errors);
}

if(isset($_REQUEST["delete"])) {
	if (strlen($_REQUEST["delete"]) > 5) {
		$book -> delete($_REQUEST["delete"]);
		$file = "./public/images/covers/{$_REQUEST['delete']}.jpg";
		if (file_exists($file)) unlink($file);
		header("Location: dashboard.php?sc=books");
	} else {
		$user -> delete($_REQUEST["delete"]);
		header("Location: dashboard.php?sc=users");
	}
}

if($_REQUEST['sc'] == "users")
	$all_users = $user -> get_all();
else
	$all_books = $book -> get_all();

if(isset($_REQUEST["s"])) {
	if ($_REQUEST["sc"] == "users") {
		$all_users = $user -> search($_REQUEST["s"]);
	} else {
		$all_books = $book -> search($_REQUEST["s"]);
	}
}

if(!isset($_REQUEST['sc'])) header("Location: dashboard.php?sc=books");
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
	<link rel="stylesheet" href="./public/styles/dashboard.css" type="text/css">
	<link rel="shortcut icon" href="./public/images/favicon.png" type="image/x-icon">
	<script src="./public/scripts/jquery-3.5.0.min.js"></script>
</head>
<body>
	<center>
		<img src="./public/images/Logo.svg" alt="The Novelist">
	</center>
	<div class="container">
		<div class="controls">
			<form class="search" action="dashboard.php" method="GET">
				<img src="./public/images/icons8-search.svg" alt="Search">
				<input type="search" name="s" id="searchField" placeholder="Search for Users or Books  .." value="<?php echo isset($_REQUEST["s"]) ? $_REQUEST["s"] : '' ?>">
				<input type="hidden" name="sc" value="<?php echo $_REQUEST['sc']; ?>">
			</form>
			<div class="segmentedControls">
				<input type="radio" name="segmentedControl" id="Users" <?php echo $_REQUEST['sc'] == 'users' ? 'checked' : '' ?>>
				<a href="?sc=users">Users</a>
				<input type="radio" name="segmentedControl" id="Books" <?php echo $_REQUEST['sc'] == 'books' ? 'checked' : '' ?>>
				<a href="?sc=books">Books</a>
			</div>
			<div class="actions">
				<a href="#">
					<img src="./public/images/icons8-refresh.svg" alt="RELOAD">
					<span>Reload table</a>
				</a>
				<a href="#" <?php echo $_REQUEST['sc'] != 'books' ? "style='display: none'" : '' ?> >
					<img src="./public/images/icons8-add.svg" alt="ADD">
					<span>Add new book</span>
				</a>
			</div>
		</div>

		<div class="table">
			<?php if($_REQUEST['sc'] == 'books'): ?>
				<div class="head">
					<input type="checkbox" name="Select">
					<span>ID</span>
					<span>Cover</span>
					<span>Title</span>
					<span>Author</span>
					<span>Provider</span>
					<span>Genre</span>
					<span>Language</span>
					<span>Released</span>
					<span>ISBN</span>
					<span>Number of Pages</span>
					<span>Price</span>
					<span>Actions</span>
				</div>
				<hr>
				<?php foreach($all_books as $book_row): ?>
					<div class="<?php echo $_REQUEST['sc'] ?>-row">
						<input type="checkbox" name="Select">
						<span><?php echo $book_row['ID']; ?></span>
						<img src="./public/images/covers/<?php echo $book_row['ISBN']; ?>.jpg" alt="COVER"/>
						<span><?php echo $book_row['Title']; ?></span>
						<span><?php echo $book_row['Author_Name']; ?></span>
						<span><?php echo $book_row['Provider']; ?></span>
						<span><?php echo $book_row['Genre']; ?></span>
						<span><?php echo $book_row['Language']; ?></span>
						<span><?php echo $book_row['Release_Date']; ?></span>
						<span><?php echo $book_row['ISBN']; ?></span>
						<span><?php echo $book_row['Pages']; ?></span>
						<span><?php echo $book_row['Price']; ?> SR</span>
						<div class="actionButtons">
							<a href="#">
								<img src="./public/images/icons8-edit.svg" alt="Edit">
							</a>
							<a href="?delete=<?php echo $book_row["ISBN"]; ?>">
								<img src="./public/images/icons8-delete_bin.svg" alt="Delete">
							</a>
						</div>
					</div>
				<hr>
				<?php endforeach; ?>
			<?php elseif($_REQUEST['sc'] == 'users'): ?>
				<div class="<?php echo $_REQUEST['sc'] ?>-head">
					<input type="checkbox" name="Select">
					<span>ID</span>
					<span>First Name</span>
					<span>Last Name</span>
					<span>Username</span>
					<span>Email</span>
					<span>Actions</span>
				</div>
				<hr>
				<?php foreach($all_users as $user_row): ?>
					<div class="<?php echo $_REQUEST['sc'] ?>-row">
						<input type="checkbox" name="Select">
						<span><?php echo $user_row['ID']; ?></span>
						<span><?php echo $user_row['First_Name']; ?></span>
						<span><?php echo $user_row['Last_Name']; ?></span>
						<span><?php echo $user_row['Username']; ?></span>
						<span><?php echo $user_row['Email']; ?></span>
						<div class="actionButtons">
							<a href="#">
								<img src="./public/images/icons8-edit.svg" alt="Edit">
							</a>
							<a href="?delete=<?php echo $user_row["ID"]; ?>">
								<img src="./public/images/icons8-delete_bin.svg" alt="Delete">
							</a>
						</div>
					</div>
					<hr>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>

	<form id="popup" class="popup" method="POST" action="" enctype="multipart/form-data">
		<h4>Add new book</h4>
		<div class="fields">
			<input type="text" name="Title" placeholder="Title" required>
			<input type="text" name="Author" placeholder="Author" required>
			<input type="text" name="Provider" placeholder="Provider" required>
			<input type="text" name="Genre" placeholder="Genre" required>
			<input type="text" name="Language" placeholder="Language" required>
			<input type="date" name="Release_Date" placeholder="Release_Date" required>
			<input type="number" name="ISBN" placeholder="ISBN" required>
			<input type="number" name="Number_of_Pages" placeholder="Number of Pages" required>
			<input type="number" name="Price" placeholder="Price" required>
			<input type="number" name="Rating" placeholder="Rating" required>
			<input type="file" name="Cover">
		</div>
		<input type="submit" name="submit" value="Add">
	</form>
	<script src="./public/scripts/dashboard.js"></script>
</body>
</html>