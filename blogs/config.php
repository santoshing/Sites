<?php

error_reporting(E_ALL & ~E_NOTICE);
$db = mysqli_connect('localhost', 'root', 'Admin1234', 'blog');
if (!$db) {
    echo 'Error: Unable to connect to MySQL.';
    echo 'Debugging errno: ' . mysqli_connect_errno();
    echo 'Debugging error: ' . mysqli_connect_error();
    exit;
}
