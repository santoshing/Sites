<?php 
require_once('../library/function.php');
//  var_dump($_POST);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    if ($password != $confirm_password) {
        echo "password not match";
        exit();
    }
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo "email not exist";
        exit();
    }
    $query = "UPDATE users SET password = '$password' WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    echo "success";


} else {
    echo "Wrong input";
}

?>