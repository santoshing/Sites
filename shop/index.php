<?php 
require_once('library/function.php');
require_once('template/head.php');
?>

<?php if(isset($_SESSION['logged'])){ ?>


<a href="profile.php">Profile</a>
<hr>
<a href="logout.php">logout</a>
<hr>
<a href="security.php">reset password</a>
<hr>
<a href="add-post.php">Add post</a>
<hr>

welcome <?php echo $_SESSION['name']; ?>

<?php } else { ?>

<a href="login.php">login</a>

<a href="signup.php">signup</a>




<?php } ?>