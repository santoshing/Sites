<?php
require_once('../function.php');

$id = $_GET['id'];
$delete_query = $db->query("DELETE FROM `news` WHERE `id` = $id"); 
if($delete_query==true){
    $_SESSION['success'] = $id. " Deleted";
}else{
   $_SESSION["error"] = $id. " Not Deleted";
}
header("location: post-news-list.php");
?>