<?php
require_once('library/function.php');
require_once('template/head.php');



?>



<section class="w-100 p-4 d-flex row  pb-4"">

<section class=" col-md-8">
    <h6 class="text-center">Add Post List</h6>
    <table class="table table-bordered">
        <?php 
            $query = "SELECT * FROM posts";
            $result = mysqli_query($db, $query);
            $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title </th>
                <th scope="col">message</th>
                <th scope="col ">Action</th>
            </tr>
            <?php foreach ($posts as $post) : ?>
            <tr>
                <th scope="row"><?= $post['id'] ?></th>
                <td><?= $post['message_name'] ?></td>
                <td><?= $post['message'] ?></td>
                <td>
                    <a href="add-post-edit.php?id=<?= $post['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="add-post-delete.php?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>


        </thead>
    </table>

</section>




<section class=" col-md-4">
    <h2>Add Post</h2>
    <form action=" <?php echo VALIDATION_URL ?>add-post-action.php" method="post" style=" width: 26rem; ">

        <div data-mdb-input-init class=" form-outline mb-4">
            <input type="text" class="form-control" name="message_name" />
            <label class="form-label" ">Title</label>
    </div>



    <div data-mdb-input-init class=" form-outline mb-4">
                <textarea name="message" class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Message</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Submit</button>
    </form>
</section>
</section>