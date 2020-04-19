<?php

require("./includes/config.php");

    if($_GET['op'] == 'add')
        {

                mysqli_query($conn,"INSERT INTO Wishlist (`UserID`,`BookID`) VALUES ('$_SESSION[UserID]','$_GET[id]');");
           
                header("Location: proudctView.php?id=".$_GET['id']);
        }       
    
    if($_GET['op'] == 'del')
        {
                mysqli_query($conn,"DELETE FROM `Wishlist` WHERE `BookID` = '$_GET[id]'");
                
                header("Location: proudctView.php?id=".$_GET['id']);
                
        }
    if($_GET['op'] == 'clear') 
        {   
            mysqli_query($conn,"DELETE FROM `Wishlist` WHERE `UserID` = '$_SESSION[UserID]'");
           
            header("Location: wishlist.php");
        }    
?>

