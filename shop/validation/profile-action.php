<?php 
require_once('../library/function.php');
// var_dump($_POST);
// exit();
if (isset($_POST['submit'])) {
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $present_adress = $_POST['present_adress'];
    $permanet_adress = $_POST['permanet_adress'];
    $birth_date = $_POST['birthday_date'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $phone_number = $_POST['phone'];
    
    $email = $_SESSION['email'];

    $query = "UPDATE users SET father_name = '$father_name', mother_name = '$mother_name', present_address = '$present_adress', permanent_address = '$permanet_adress', birth_date = '$birth_date', gender = '$gender', blood_group = '$blood_group', phone_number = '$phone_number' WHERE email = '$email'"; 

    $result = mysqli_query($db, $query);

    if ($result) {
        header('location: '.BASE_URL.'profile.php');
    }   
   




 
  
   
};




?>