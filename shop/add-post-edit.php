<?php 
require_once('library/function.php');
require_once('template/head.php');


?>

<section class="w-100 p-4 d-flex row  pb-4">

    <?php 
        $id = $_GET['id'];
        $query = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($db, $query);
        $post = mysqli_fetch_assoc($result);
    ?>


    <section class=" col-md-4">
        <h2>Edit Post</h2>
        <form action=" <?php echo VALIDATION_URL ?>add-post-action.php" method="post" style=" width: 26rem; ">

            <div data-mdb-input-init class=" form-outline mb-4">
                <input type="text" class="form-control" name="message_name" value="<?= $post['message_name'] ?>" />
                <label class="form-label" ">Title</label>
            </div>  

            <div data-mdb-input-init class=" form-outline mb-4">
                    <input type="text" class="form-control" name="message" value="<?= $post['message'] ?>" />
                    <label class="form-label">message</label>
            </div>

            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <button type="submit" name="update" class="btn btn-primary">Submit</button>

        </form>




    </section>