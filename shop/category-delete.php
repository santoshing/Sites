<?php 
require_once('library/function.php');

var_dump($_GET);
$id = $_GET['id'];
$delete_query = $db->query("DELETE FROM `category` WHERE `id` = $id");
if ($delete_query==true){
    $_SESSION['success'] = $id.'deleted';
    
    
}
else{
    $_SESSION['error'] = $id.'not deleted';}
    header('location: category.php');
?>