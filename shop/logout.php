<?php 
require_once('library/function.php');

if(isset($_SESSION['logged'])){
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    header('location: login.php');
}