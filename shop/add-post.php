<?php
require_once('library/function.php');
require_once('template/head.php');



?>



<section class="w-100 p-4 d-flex row  pb-4"">

<section class=" col-md-8">
    <h6 class="text-center">Add Post List</h6>
    <table class="table table-success table-striped">
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
                <th scope="col">category </th>
                <th scope="col">user</th>
                <th scope="col">Location</th>

                <th scope="col ">Action</th>
            </tr>
            <?php foreach ($posts as $post) : ?>
            <tr>
                <th scope="row"><?= $post['id'] ?></th>
                <td><?= $post['message_name'] ?></td>
                <td><?= $post['message'] ?></td>

                <td>

                    <?php 
                        $query = "SELECT * FROM category WHERE id = {$post['category_id']}";
                        $result = mysqli_query($db, $query);
                        $num_row = mysqli_num_rows($result);
                        if($num_row > 0){
                            $category = mysqli_fetch_assoc($result);
                            echo $category['name'];
                        }
                
                    ?>
                </td>
                <td>
                    <?php
                    $query = "SELECT * FROM users WHERE id = {$post['user_id']}";
                    $result = mysqli_query($db, $query);
                    $num_row = mysqli_num_rows($result);
                    if($num_row > 0){
                        $user = mysqli_fetch_assoc($result);
                        echo $user['name'];
                    }
                    ?>

                </td>


                <td>

                    <?php 

                    
                    $query = "SELECT * FROM location WHERE id = {$post['location_id']}";
                    $result = mysqli_query($db, $query);
                    $num_row = mysqli_num_rows($result);
                    if($num_row > 0){
                        $location = mysqli_fetch_assoc($result);
                        echo $location['name'];
                    }

                    ?>




                </td>






                <td>
                    <a href="add-post-edit.php?id=<?= $post['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="add-post-delete.php?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>


        </thead>
    </table>

</section>





<section class="col-md-4 ">
    <h2 class="text-center">Add Post</h2>
    <form action=" <?php echo VALIDATION_URL ?>add-post-action.php" method="post" style=" width: 26rem; ">

        <div data-mdb-input-init class=" form-outline mb-4 p-2">
            <input type="text" class="form-control" name="message_name" required="required" />
            <label class="form-label" ">Title</label>
        </div>


        <div class=" form-outline mb-4 p-2">
                <h2>select category</h2>
                <select class=" form-select" required="required" name="category_id" required="required">
                    <option value="">Select category</option>

                    <?php 
                    $query = "SELECT * FROM category";
                    $result = mysqli_query($db, $query);
                    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($categories as $category) : ?>

                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach ?>



                </select>
        </div>

        <div class=" form-outline mb-4 p-2">
            <h2>Location </h2>
            <select class=" form-select" required="required" name="location_id" required="required">
                <option value="">Select Location</option>

                <?php 
                    $query = "SELECT * FROM location";
                    $result = mysqli_query($db, $query);
                    $locations = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($locations as $location) : ?>

                <option value="<?= $location['id'] ?>"><?= $location['name'] ?></option>
                <?php endforeach ?>



            </select>
        </div>




        <div data-mdb-input-init class="p-2 form-outline mb-4">
            <textarea name="message" class="form-control" id="form4Example3" rows="4" required="required"></textarea>
            <label class="form-label" for="form4Example3">Message</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Submit</button>
    </form>
</section>

</section>