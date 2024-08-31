<?php 

require_once('../library/function.php');
var_dump($_POST);
if (isset($_POST['submit'])) {
    $message_name = $_POST['message_name'];
    $message = $_POST['message'];
    
    $query = "INSERT INTO posts (message_name, message) VALUES ('$message_name', '$message')";
    $result = mysqli_query($db, $query);
    if ($result) {
        echo "success";
    }
    header('location: '.BASE_URL.'add-post.php');
}

if (isset($_POST['update'])) {
    $message_name = $_POST['message_name'];
    $message = $_POST['message'];
    $id = $_POST['id'];
    $query = "UPDATE posts SET message_name = '$message_name', message = '$message' WHERE id = $id";
    $result = mysqli_query($db, $query);
    if ($result) {
        echo "success";
    }
    header('location: '.BASE_URL.'add-post.php');
}