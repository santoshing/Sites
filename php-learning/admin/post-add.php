<?php require_once('../function.php'); require_once('../head.php'); ?>
<div class="container ">
    <?php require_once('admin-header.php') ?>




    <form class="row g-3 p-5" action="post-add-insert.php" method="post">
        <div class="text-center"> admin post</div>
        <div class="col-md-4">
            <label for="inputtext" class="form-label">Image</label>
            <input type="text" class="form-control" name="image">
        </div>
        <div class="col-md-4">
            <label for="inputtext" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="col-md-4">
            <label for="inputnumber" class="form-label">Bed Room</label>
            <input type="number" class="form-control" name="bedroom">
        </div>
        <div class="col-md-4">
            <label for="inputnumber" class="form-label">Bath Room</label>
            <input type="number" class="form-control" name="bathroom">
        </div>
        <div class="col-md-4">
            <label for="inputtext" class="form-label">Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="col-md-4">
            <label for="inputnumber" class="form-label">Rent</label>
            <input type="number" class="form-control" name="rent">
        </div>
        <div class="col-md-4">
            <label for="inputtext" class="form-label">Rent Form</label>
            <input type="text" class="form-control" name="rentform">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
</div>
</div>