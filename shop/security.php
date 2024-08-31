<?php
 require_once('library/function.php'); 
 require_once('template/head.php');
?>
<?php if(isset($_SESSION['logged'])){ ?>

<h2 class="text-center">security check </h2>

<sectio class="w-100 p-4 d-flex justify-content-center pb-4">



    <form action="<?php echo VALIDATION_URL?>security-action.php" method="post">
        <div class="form-group mt-4">




            <div class="mt-4">
                <label>Security Question</label>
                <select name="question" id="">
                    <option value="1">what is the name of your city? </option>
                    <option value="2">what is your pet name? </option>
                    <option value="3">what is your favorite color? </option>
                </select>
            </div>

        </div>

        <div class="form-group mt-4">
            <label> security Answer</label>
            <input type="text" class="form-control " placeholder="answer" name="answer">

        </div>

        <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
    </form>
    </section>


    <?php } else { echo "please login first";} ?>