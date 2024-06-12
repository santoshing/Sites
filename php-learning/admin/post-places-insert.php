<?php 

require_once('../function.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    if ($name == '' || $comment == '') {
        $_SESSION['error'] = "please fill all fields";
        header("location: post-places-add.php");
        exit();
    }
    $insert_query = $db->query("INSERT INTO `places` (`name`, `comment`) VALUES ('$name', '$comment')");

    if ($insert_query == true) {
        $_SESSION['success'] = "Inserted";
    } else {
        $_SESSION['error'] = "Not Inserted";
    }
    header("location: post-places-add.php");
    exit();
}


// var_dump($_POST);


// $name = $_POST['name'];
// $comment = $_POST['comment'];

// $insert_query = $db->query("INSERT INTO `places` (`name`, `comment`) VALUES ('$name', '$comment')"); 
// if($insert_query==true){
//     echo "inserted";
// }else{
//     echo "not inserted";
// }
// header("location: post-places-add.php");

?>