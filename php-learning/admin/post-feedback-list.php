<?php
require_once('../function.php'); require_once('../head.php');
$feedbacks_query = $db->query ("SELECT * FROM `feedbacks`");
$feedbacks = $feedbacks_query->fetch_all(MYSQLI_ASSOC);
?>


<div class="container p-5 ">
    <?php require_once('admin-header.php') ?>
    <div class="m-3">
        <a href="post-feedback-add.php" class="btn btn-primary">Add Feedback</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Rating</th>
                <th scope="col">Comment</th>
                <th colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($feedbacks as $feedback) : ?>
            <tr>
                <th scope="row"><?php echo $feedback['id'] ?></th>
                <td><?php echo $feedback['name'] ?></td>
                <td><?php echo $feedback['rating'] ?></td>
                <td><?php echo $feedback['comment'] ?></td>
                <th><button type="button" class="btn btn-primary">Edit</button></th>

                <th>
                    <a href="post-feedback-delete.php?id=<?php echo $feedback['id'] ?>"
                        class="btn btn-danger">Delete</a>
                </th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>