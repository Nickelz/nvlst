<?php
    require("./includes/config.php");
    echo $_GET['id'];
    if (empty($_SESSION['Cart'])){
    $_SESSION['Cart'] = array();
    }
    array_push($_SESSION['Cart'], $_GET['id']);

    
?>

<a href="cart.php">cart </a>