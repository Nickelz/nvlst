
<?php
    require("./includes/config.php");
   
   
    if($_GET['op']== 'add')
    {
        echo $_GET['id'];
        if (empty($_SESSION['Cart']))
        {
            $_SESSION['Cart'] = array();
        }
        array_push($_SESSION['Cart'], $_GET['id']);

        header("location: cart.php");
    }
    if($_GET['op']== 'del')
    {
        unset($_SESSION['Cart'][array_search($_GET['id'],$_SESSION['Cart'])]);
        header("location: cart.php");
    }

    if($_GET['op']== 'clear')
    {
        $_SESSION['Cart'] = array();
        header("location: cart.php");
    }