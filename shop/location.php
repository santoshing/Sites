<?php 
require_once('library/function.php');
require_once('template/head.php');
?>
<section class="row d-flex">


    <section class="col-md-4">
        <h1 class="text-center">
            location List
        </h1>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Location Name </th>
                    <th>Action</th>

                </tr>
                <?php
                $query = "SELECT * FROM location";
                $result = mysqli_query($db, $query);
                $locations = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($locations as $location) :
                ?>

                <tr>
                    <th scope="row"><?=$location['id'] ?></th>
                    <td><?=$location['name'] ?> </td>
                    <td>
                        <a href="location-edit.php?id=<?=$location['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="location-delete.php?id=<?=$location['id'] ?>" class="btn btn-danger">Delete</a>
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




        <form action="<?php echo VALIDATION_URL?>location-action.php" method="post">
            <h2 class=" text-center">Location</h2>
            <div class="form-group mt-4">




                <div class="mt-4">
                    <label for=" ">Name</label>
                    <input type="text" class="form-control " placeholder="Location Name" required="required"
                        name="name">
                </div>

            </div>



            <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
        </form>


    </section>

</section>