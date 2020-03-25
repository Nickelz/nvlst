<?php
ob_start();
session_start();

require(dirname(__FILE__) . '/../db/db.php');
include(dirname(__FILE__) . '/../models/user.php');
$user = new User($conn);