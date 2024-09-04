<?php 
require_once('library/function.php');
require_once('template/head.php');
?>
<section class="row d-flex">
    <?php 
        $id = $_GET['id'];
        $query = "SELECT * FROM category WHERE id = $id";
        $result = mysqli_query($db, $query);
        $post = mysqli_fetch_assoc($result);
    ?>

    <form action="<?php echo VALIDATION_URL?>category-action.php" method="post">
        <h2 class="text-center">Category</h2>
        <div class="form-group mt-4">




            <div class="mt-4">
                <label for=" ">Name</label>
                <input type="text" class="form-control " placeholder="Enter Name" name="name"
                    value="<?= $post['name'] ?>" required="required">
            </div>

        </div>


        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <button type="submit" class="btn btn-primary mt-4" name="update">Submit</button>

    </form>


</section>