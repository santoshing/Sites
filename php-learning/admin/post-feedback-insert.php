<?php
require_once('../function.php');

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    if ($name == '' || $rating == '' || $comment == '') {
        $_SESSION['error'] = "please fill all fields";
        header("location: post-feedback-add.php");
        exit();
    }

    $insert_query = $db->query("INSERT INTO `feedbacks` (`name`, `rating`, `comment`) VALUES ('$name', '$rating', '$comment')");

    if ($insert_query == true) {
        $_SESSION['success'] = "Inserted";
    } else {
        $_SESSION['error'] = "Not Inserted";
    }
    header("location: post-feedback-add.php");
    exit();

}



//  var_dump($_POST);

//  $name=$_POST['name'];
//  $rating=$_POST['rating'];
//  $comment=$_POST['comment'];

//  $insert_query=$db->query("INSERT INTO `feedbacks` (`name`, `rating`, `comment`) VALUES ('$name', '$rating', '$comment')"); 

//  if($insert_query==true){
//      echo "inserted";
//  }else{
//      echo "not inserted";
//  }
//  header("location: post-feedback-list.php");

?>