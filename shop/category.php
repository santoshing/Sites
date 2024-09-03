<?php 
require_once('library/function.php');
require_once('template/head.php');
?>

<section class="row d-flex">

    <section class="col-md-4">
        <h1 class="text-center">
            Category list

        </h1>
    </section>
    <section class="col-md-4">



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