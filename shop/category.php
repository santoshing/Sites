<?php 
require_once('library/function.php');
require_once('template/head.php');
?>

<section class="row d-flex">


    <section class="col-md-4">
        <h1 class="text-center">
            Category list
        </h1>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name </th>
                    <th>Action</th>

                </tr>
                <?php 
        $query = "SELECT * FROM category";
        $result = mysqli_query($db, $query);
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($categories as $category) : ?>


                <tr>
                    <th scope="row"><?= $category['id'] ?></th>
                    <td><?= $category['name'] ?></td>
                    <td>
                        <a href="category-edit.php?id=<?= $category['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="category-delete.php?id=<?= $category['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </thead>
        </table>

    </section>



    <section class="col-md-4">
        <?php 
        if(isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }

       
         ?>



        <form action="<?php echo VALIDATION_URL?>category-action.php" method="post">
            <h2 class="text-center">Category</h2>
            <div class="form-group mt-4">




                <div class="mt-4">
                    <label for=" ">Name</label>
                    <input type="text" class="form-control " placeholder="Enter Name" name="name" required="required">
                </div>

            </div>



            <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
        </form>


    </section>

</section>