<?php
require_once('../library/function.php');


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['logged'] =   1;
        header('location: ' . BASE_URL . 'index.php');
    } else {
        echo "Login failed";
    }
} else {
    echo "Wrong input";
}