<?php 

require_once('../function.php');

var_dump($_POST);


$name = $_POST['name'];
$comment = $_POST['comment'];

$insert_query = $db->query("INSERT INTO `places` (`name`, `comment`) VALUES ('$name', '$comment')"); 
if($insert_query==true){
    echo "inserted";
}else{
    echo "not inserted";
}
header("location: post-places-add.php");
?>