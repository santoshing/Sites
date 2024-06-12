<?php
require_once('../function.php');

if(isset($_POST['submit'])){
$image = $_POST['image'];
$link = $_POST['link'];

if ($link == '' || $image == '') {
    $_SESSION['error'] = "please enter image and link";
    header("location: post-news-add.php");
    exit();
}
$insert_query = $db->query("INSERT INTO `news` (`image`, `link`) VALUES ('$image', '$link')"); 

if($insert_query==true){
    $_SESSION['success'] = "Inserted";
}else{
    $_SESSION['error'] = "Not Inserted";
}
header("location: post-news-add.php");
} 
else {
    $_SESSION['error'] = "Wrong Page";
// header("location: post-news-add.php");
}
?>