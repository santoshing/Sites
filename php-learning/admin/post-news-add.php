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
    <form class="row g-3 p-5 action" action="post-news-insert.php" method="post">
        <div class="text-center"> admin news</div>
        <div class="col-md-4">
            <label for=" inouttext" class="form-label">Image</label>
            <input type="text" class="form-control" name="image">
        </div>
        <div class="col-md-4">
            <label for="inputtext" class="form-label">link</label>
            <input type="text" class="form-control" name="link">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
</div>