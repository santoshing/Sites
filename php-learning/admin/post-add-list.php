<?php
 require_once('../function.php'); require_once('../head.php');

 $posts_query = $db->query("SELECT * FROM `posts`");
$posts = $posts_query->fetch_all(MYSQLI_ASSOC);
?>



<div class="container p-5 ">
    <?php require_once('admin-header.php') ?>

    <div class="m-3">
        <a href="post-add.php" class="btn btn-primary">Add Post</a>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Bedroom</th>
                    <th scope="col">Bathroom</th>
                    <th scope="col">Location</th>
                    <th scope="col">Rent</th>
                    <th scope="col">Rent Form</th>
                    <th scope="col">Action</th>
                </tr>

                <?php foreach ($posts as $post) : ?>
                <tr>
                    <td><?php echo $post['id']; ?></td>
                    <td><?php echo $post['image']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['bed_room']; ?></td>
                    <td><?php echo $post['bath_room']; ?></td>
                    <td><?php echo $post['location']; ?></td>
                    <td><?php echo $post['rent']; ?></td>
                    <td><?php echo $post['rent_from']; ?></td>
                    <td>
                        <a href="post-add-edit.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="post-add-delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </thead>




            <tbody>
        </table>
    </div>
</div>