<?php require_once('../function.php'); require_once('../head.php'); ?>

<div class="container ">

    <?php require_once('admin-header.php') ?>
    <?php  if(isset($_SESSION['error']) || isset($_SESSION['success'])){  ?>
    <div class="alert alert-primary mt-2" role="alert">
        <?php var_dump($_SESSION);
    //clean session data
   unset($_SESSION['success']);
   unset($_SESSION['error']);
  ?>
    </div>
    <?php } ?>


    <form class="row g-3 p-5" method="post" action="post-places-insert.php">
        <div class="text-center"> places</div>
        <div class="col-md-4">
            <label for=" inouttext" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-4">
            <label for="inputtext" class="form-label">comment</label>
            <input type="text" class="form-control" name="comment">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
</div>