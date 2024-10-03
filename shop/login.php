<?php 
require_once('library/function.php');
require_once('template/head.php');
?>

<h2 class="text-center">Login</h2>

<sectio class="w-100 p-4 d-flex justify-content-center pb-4 ">



    <form action="<?php echo VALIDATION_URL?>login-action.php" method="post">
        <div class="form-group mt-4">




            <div class="mt-4">
                <label for="exampleInputEmail1 ">Email address</label>
                <input type="email" class="form-control " placeholder="Enter email" name="email">
            </div>

        </div>

        <div class="form-group mt-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control " placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
    </form>
    </section>