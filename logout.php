<?php
require("./includes/config.php");

$user -> logout();

header('Location: login.php');
exit;