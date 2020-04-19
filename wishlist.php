<!DOCTYPE html>
<form lang="en">

<head>
	<!-- <?php include('./templates/header.php'); ?> -->

	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>wishlist</title>

	<link rel="stylesheet" href="./public/styles/main.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
	<link rel="stylesheet" href="./public/styles/wishList.css" type="text/css">
	<title>WishList</title>
</head>

<body>
	<body>
		<div class="container">
		<?php 
	require("./includes/nav.php");
	require("./includes/config.php");
	require("./models/api.php");

	if(!isset($_SESSION['UserID']))
	header("location: login.php");

	?>

			<div class="all-containers">
                
            <div class="small-container">

                <div class="two-words">

                    <label> List</label>

                    <a href="wishlistOP.php?op=clear" >Clear </a>
                </div>

                <div class="wish-list-container"> 

                    
                    <img src="./public/images/icons8-wish_list.svg" alt="heart-icon" width="20px">
                    <label> Wish List  </label>  
                
                </div>

                <!-- <div class="read-later">  
                    
                    <img id="pen-icon" src="./public/images/icons8-wish_list.svg" alt="user-icon" width="20px">

                    <label>i will read it later</label> 
					
					
                    <img id="pen-icon" src="./public/images/icons8-wish_list.svg" alt="user-icon" width="20px">

                    
                        <img id="trash-icon" src="./public/images/icons8-wish_list.svg" alt="user-icon" width="20px">
				
				
                </div>


                <div class="sugg-by-friend"> 
                    
                    <img id="first-icon" src="./public/images/icons8-wish_list.svg" alt="user-icon" width="20px">

                    <label>suggested by friend</label> 
					
					
                    <img id="pen-icon" src="./public/images/icons8-wish_list.svg" alt="user-icon" width="20px">

                   
                        <img id="trash-icon" src="./public/images/icons8-wish_list.svg" alt="user-icon" width="20px">
					
				</div> -->
				</div>
				
				<div class="big">
					<div class="one-word">
					<label> MY WISHLIST </label>
				</div>


					<div class="top-row">

						<?php
						//retrive the list from wishlist tabel
						$list = array();
						$wishlist = $conn -> query("SELECT * FROM `Wishlist` WHERE `UserID` = {$_SESSION['UserID']}") or die($conn -> error);
						while($listRow = $wishlist -> fetch_assoc())  {
							array_push($list , $listRow["BookID"]);
							$listwish = implode(',' , $list);
						}
						// retrive the books
						if(isset($listwish)){
						$wishResult = $conn -> query("SELECT * FROM `Books` WHERE `ID` IN ($listwish)") or die($conn -> error);
						
						while($wishRow = $wishResult -> fetch_assoc())  { ?>
				
						<ul id="book">
							<li id="bookImg">
							<?php echo "<a href=proudctView.php?id=" . $wishRow['ID'] . ">" ?>
							<img src="./public/images/covers/<?php echo $wishRow["ISBN"]; ?>.jpg" style="width: 80px; height: 100px; " alt="Book">
							</a>
							</li>
							<li id="bookTitle"><?php echo $wishRow["Title"]; ?> </li>
							<li id="bookAuthor"><?php echo $wishRow["Author_Name"]; ?></li>
							<li id="bookPrice"><?php echo $wishRow["Price"]; ?> SR</li>
						</ul>
						<?php } }?>
					</div>

					<!-- <div class="botton-row">

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
					<div class="botton-row">

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
		 -->

			</div>
                
            </div>



                	
	</body>
</body>

</form>