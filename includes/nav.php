<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?>
<div>
	<div class="sideNav">
		<img src="./public/images/Logo.svg" alt="Logo" class="logo">
		<ul>
			<li id="<?php echo ($activePage == 'search' || $activePage == 'searchResult') ? 'active' : '' ?>">
				<a href="./search.php">
					<img src="./public/images/icons8-search.svg" alt="Search" width="20px">
					<span>Search</span>
				</a>
			</li>
			<li id="<?php echo ($activePage == 'discover') ? 'active' : '' ?>">
				<a href="./discover.php">
					<img src="./public/images/icons8-compass.svg" alt="Discover" width="20px">
					<span>Discover</span>
				</a>
			</li>
			<li id="<?php echo ($activePage == 'mybooks') ? 'active' : '' ?>">
				<a href="./mybooks.php">
					<img src="./public/images/icons8-books.svg" alt="My books" width="20px">
					<span>My Books</span>
				</a>
			</li>
		</ul>
		<ul>
			<li id="<?php echo ($activePage == 'cart') ? 'active' : '' ?>">
				<a href="./cart.php">
					<img src="./public/images/icons8-shopping_cart_with_money.svg" alt="Cart" width="20px">
					<span>Cart</span>
				</a>
			</li>
			<li id="<?php echo ($activePage == 'wishlist') ? 'active' : '' ?>">
				<a href="./wishlist.php">
					<img src="./public/images/icons8-wish_list.svg" alt="Lists" width="20px">
					<span>Lists</span>
				</a>
			</li>
			<li id="<?php echo ($activePage == 'orders') ? 'active' : '' ?>">
				<a href="./orders.php">
					<img src="./public/images/icons8-purchase_order.svg" alt="Orders" width="20px">
					<span>Orders</span>
				</a>
			</li>
			<li id="<?php echo ($activePage == 'contact') ? 'active' : '' ?>">
				<a href="./contact.php">
					<img src="./public/images/icons8-contacts.svg" alt="My books" width="20px">
					<span>Contact Us</span>
				</a>
			</li>
		</ul>
		<?php
		require_once("./includes/config.php");
		if ($user -> is_logged_in()): ?>
		<div class="userControls">
			<span>Hello,</span>
			<span><?php echo $_SESSION["FullName"]; ?></span>
			<div>
				<hr align="left">
			</div>
			<a href="./account.php">Edit Profile</a>
			<a href="./logout.php">Logout</a>
		</div>
		<?php else: ?>
			<a href="./login.php" id="signUpLoginButton"><span>Login</span></a>
		<?php endif; ?>
	</div>

	<?php 	
			if(isset($_SESSION['UserID'])){
			if($user -> is_admin($_SESSION['UserID']) === TRUE): ?>
		<a id="dashboard" href="dashboard.php">
			<img src="./public/images/icons8-dashboard.png" alt="Dashboard">
			<span>Admin Dashboard</span>
		</a>
	<?php endif;} ?>
</div>