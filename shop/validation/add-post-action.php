<?php 

require_once('../library/function.php');
var_dump($_POST);
if (isset($_POST['submit'])) {
    $message_name = $_POST['message_name'];
    $message = $_POST['message'];
    $category_id=$_POST['category_id'];
    $location_id=$_POST['location_id'];
    
    $query = "INSERT INTO posts (message_name, message,category_id,location_id ) VALUES ('$message_name', '$message','$category_id','$location_id')";
    $result = mysqli_query($db, $query);
    if ($result) {
        echo "success";
    }
    header('location: '.BASE_URL.'add-post.php');
}

if (isset($_POST['update'])) {
    $message_name = $_POST['message_name'];
    $message = $_POST['message'];

    
    $category_id=$_POST['category_id'];
    $location_id=$_POST['location_id'];
    
    $id = $_POST['id'];
    $query = "UPDATE posts SET message_name = '$message_name', message = '$message',category_id = '$category_id',location_id = '$location_id' WHERE id = $id";

    
    $result = mysqli_query($db, $query);
    if ($result) {
        echo "success";
    }
    header('location: '.BASE_URL.'add-post.php');
}