<?php
require_once('../function.php');
 var_dump($_POST);

 $name=$_POST['name'];
 $rating=$_POST['rating'];
 $comment=$_POST['comment'];

 $insert_query=$db->query("INSERT INTO `feedbacks` (`name`, `rating`, `comment`) VALUES ('$name', '$rating', '$comment')"); 

 if($insert_query==true){
     echo "inserted";
 }else{
     echo "not inserted";
 }
 header("location: post-feedback-list.php");

?>