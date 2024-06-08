<?php require_once('../function.php'); require_once('../head.php'); ?>

<div class="container ">
    <form class="row g-3 p-5 " action="post-feedback-insert.php" method="post">
    <div class="text-center"> admin Feedback</div>
    <div class="col-md-4">
        <label for="inputtext"class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
     <div class="col-md-4">
        <label for="inputnumber" class="form-label">Rating</label>
        <input type="number" class="form-control" name="rating">
     </div>
            <div class="col-md-4">
                <label for="inputtext" class="form-label">comment</label>
                 <input type="text" class="form-control" name="comment" >
            </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
    </form>
</div>