<?php
require_once('../library/function.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $query = "SELECT * FROM category WHERE name = '$name'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "name already exist";
        $_SESSION['error'] = "name already exist";
        header('location: '.BASE_URL.'category.php');
    }

    else {
        $query = "INSERT INTO category (name) VALUES ('$name')";
        $result = mysqli_query($db, $query);
        if ($result) {
            echo "success";
        }
    }
     header('location: '.BASE_URL.'category.php');
}





?>