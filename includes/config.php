<?php
session_start();

require(dirname(__FILE__) . '/../db/db.php');
require(dirname(__FILE__) . '/../models/user.php');
require(dirname(__FILE__) . '/../models/book.php');
$user = new User($conn);
$book = new Book($conn);