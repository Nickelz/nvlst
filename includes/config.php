<?php
if(!isset($_SESSION)){
    session_start();
}

// $_SESSION['previous_location'] = $_SERVER['HTTP_REFERER'];
// echo $_SESSION['previous_location'];
require(dirname(__FILE__) . '/../db/db.php');
require_once(dirname(__FILE__) . '/../models/user.php');
require_once(dirname(__FILE__) . '/../models/book.php');
$user = new User($conn);
$book = new Book($conn);
