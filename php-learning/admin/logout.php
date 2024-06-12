<?php require_once('../function.php'); 

    unset($_SESSION['admin']);
    $_SESSION['error'] = "Logged Out";
    header("location: admin-login.php");

?>