<?php 
require_once('../library/function.php');
//  var_dump($_POST);

if (isset($_POST['submit'])) {
    $question = $_POST['question'];
    $password = $_POST['answer'];
    $email = $_SESSION['email'];
    $query = "UPDATE users SET security = '$question', security_answer = '$password' WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    echo "success";
    
    
   
} else {
    echo "Wrong input";
}
?>