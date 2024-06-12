<?php
require_once('../function.php');
var_dump($_GET);


$id = $_GET['id'];
$delete_query = $db->query("DELETE FROM `posts` WHERE `id` = $id"); 
if($delete_query==true){
    echo "deleted";
}else{
    echo "not deleted";
}
header("location: post-add-list.php");
?>
