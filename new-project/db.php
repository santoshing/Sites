<?php

$db=mysqli_connect("localhost","root","Admin1234","new_project");
$db->set_charset("utf8");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}