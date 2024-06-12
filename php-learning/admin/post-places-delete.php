<?php

require_once('../function.php');

var_dump($_GET);

$id=$_GET['id'];

$delete_query = $db->query("DELETE FROM `places` WHERE `id` = $id"); 
if($delete_query==true){
   $_SESSION['success'] = $id. " Deleted";
}else{
   $_SESSION["error"] = $id. " Not Deleted";
}
header("location: post-places-list.php");