<?php 
require_once('../library/function.php');

// 
// exit();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name= $_POST['name'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
       echo "email already exist";
    } 
    
    else {
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($db, $query);
        if ($result) {
            echo "success";
        }
    }
} else {
    echo "Wrong input";
}

?>