<?php
require_once('../function.php');

if (isset($_POST['submit'])) {
    
    $image = $_POST['image'];
    $title = $_POST['title'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $location = $_POST['location'];
    $rent = $_POST['rent'];
    $rentform = $_POST['rentform'];

    if ($image == '' || $title == '' || $bedroom == '' || $bathroom == '' || $location == '' || $rent == '' || $rentform == '') {
        $_SESSION['error'] = "please fill all fields";
        header("location: post-add.php");
        exit();
    }
    $insert_query=$db->query("INSERT INTO `posts` (`image`, `title`, `bed_room`, `bath_room`, `location`, `rent`, `rent_from`) VALUES ('$image', '$title', '$bedroom', '$bathroom', '$location', '$rent', '$rentform')");

    if($insert_query==true){
        $_SESSION['success'] = "Inserted";
    }else{
        $_SESSION['error'] = "Not Inserted";
    }
    header("location: post-add.php");
    exit();
} 

// var_dump($_POST);

// $image=$_POST['image'];
// $title=$_POST['title'];
// $bedroom=$_POST['bedroom'];
// $bathroom=$_POST['bathroom'];
// $location=$_POST['location'];
// $rent=$_POST['rent'];
// $rentform=$_POST['rent_form'];



// $insert_query=$db->query("INSERT INTO `posts` (`image`, `title`, `bed_room`, `bath_room`, `location`, `rent`, `rent_from`) VALUES ('$image', '$title', '$bedroom', '$bathroom', '$location', '$rent', '$rentform')"); 
// if($insert_query==true){
//     echo "inserted";
// }else{
//     echo "not inserted";
// }

// header("location: post-add-list.php");






?>