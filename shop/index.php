<?php 
require_once('library/function.php'); ?>

<?php if(isset($_SESSION['logged'])){ ?>



<a href="logout.php">logout</a>

<hr>
welcome <?php echo $_SESSION['name']; ?>

<?php } else { ?>

<a href="login.php">login</a>

<a href="signup.php">signup</a>



<?php } ?>