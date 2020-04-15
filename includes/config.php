<?php
if(!isset($_SESSION)){
    session_start();
}

require(dirname(__FILE__) . '/../db/db.php');
require_once(dirname(__FILE__) . '/../models/user.php');
require_once(dirname(__FILE__) . '/../models/book.php');
$user = new User($conn);
$book = new Book($conn);