<?php
require_once('../function.php'); require_once('../head.php');

?>


<div class="container p-5 ">
    <?php require_once('admin-header.php') ?>

    <div class="m-3">
        <a href="post-places-add.php" class="btn btn-primary">Add Place</a>
    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Place Name</th>
                <th scope="col">Comment</th>
                <th colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>


            <?php
    $places_query = $db-> query ("SELECT * FROM `places`");
    $places = $places_query->fetch_all(MYSQLI_ASSOC);
    foreach ($places as $place) {

    ?>

            <tr>
                <th scope="row"><?php echo $place['id'] ?></th>
                <td><?php echo $place['name'] ?></td>
                <td><?php echo $place['comment'] ?></td>
                <th><button type="button" class="btn btn-primary">Edit</button></th>


                <th>
                    <a href="post-places-delete.php?id=<?php echo $place['id'] ?>" class="btn btn-danger">Delete</a>
                </th>
            </tr>



            <?php
    }
?>



        </tbody>
    </table>

</div>