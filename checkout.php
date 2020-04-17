<?php

require("./includes/config.php");

$date= date(l)." ".date("Y/m/d")." ";
echo $date;

if(mysqli_query($conn,"insert into OrderHistory values('','$_SESSION[UserID]','$_GET[order]','date(Y/m/d)')"))
echo "success";
			else 
				echo "Error: "  . "" . mysqli_error($conn);
$_SESSION['Cart'] = array();
 
header('location:cart.php');
?>