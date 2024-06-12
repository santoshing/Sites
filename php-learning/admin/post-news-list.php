<?php
require_once('../function.php'); require_once('../head.php');
?>

<div class="container p-5 ">
    <?php require_once('admin-header.php') ?>


    <div class="m-3">
        <a href="post-news-add.php" class="btn btn-primary">Add News</a>
    </div>


    <table class="table table-responsive table-md table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Link</th>
                <th colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
        $posts_query = $db->query("SELECT * FROM `news`");
        $posts = $posts_query->fetch_all(MYSQLI_ASSOC);
        foreach ($posts as $post) {
        ?>
            <tr>
                <th scope="col"><?php echo $post['id'] ?></th>
                <td scope="col"><?php echo stringcutter($post['image']); ?></td>
                <td scope="col"><?php echo stringcutter($post['link']); ?></td>
                <th><button type="button" class="btn btn-primary">Edit</button></th>

                <th>
                    <a href="post-news-delete.php?id=<?php echo $post['id'] ?>" class="btn btn-danger">Delete</a>
                </th>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>