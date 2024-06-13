<ul>
    <li><a href="index.php">Admin Panel</a></li>
    <li><a href="post-add-list.php">Post List</a></li>
    <li><a href="post-places-list.php">Places</a></li>
    <li><a href="post-news-list.php">News</a></li>
    <li><a href="post-feedback-list.php">Feedback</a></li>
    <li><a href="logout.php">Logout</a></li>

</ul>

<?php 
    if(!isset($_SESSION['admin'])){
        header("location: admin-login.php");
    }

   $admin_email =$_SESSION['admin_email'];
    $admin_data= $db->query("SELECT * FROM `admin` where email = '$admin_email'");
    $admin = $admin_data->fetch_assoc();
    var_dump($admin);


?>

<?php
  if(isset($_SESSION['error']) || isset($_SESSION['success'])){  ?>
<div class="alert alert-primary mt-2" role="alert">
    <?php var_dump($_SESSION);
    //clean session data
   unset($_SESSION['success']);
   unset($_SESSION['error']);
  ?>
</div>
<?php } ?>