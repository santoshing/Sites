<pre>
<?php
 require_once('../function.php'); require_once('../head.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];


     $posts_query = $db->query("SELECT * FROM `admin` where email = '$email' and password = '$password'");
     if($posts_query->num_rows > 0){
        $_SESSION['admin'] = true;

        $_SESSION['admin_email'] = $email;
        header("location: index.php");
     }
     else{
        $_SESSION['error'] = "Wrong Email or Password";
        header("location: admin-login.php");
     }
}


 ?>
</pre>