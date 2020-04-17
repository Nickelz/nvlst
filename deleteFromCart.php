
<?php 
 require("./includes/config.php");
 unset($_SESSION['Cart'][array_search($_GET['id'],$_SESSION['Cart'])]);

header("location: cart.php");

 ?>