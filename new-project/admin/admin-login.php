<?php 
require_once '../function.php';
require_once '../head.php';
?>


<div class="border ">
    <h2 class="text-center p-3">Admin Login</h2>

    <section class="w-100 p-4 d-flex justify-content-center pb-4">
        <form style="width: 22rem;" method="post" action="admin-check.php">
            <!-- Email input -->
            <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                <input type="email" id="form2Example1" class="form-control" name="email">
                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Email
                    address</label>
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 88.8px;"></div>
                    <div class="form-notch-trailing"></div>
                </div>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                <input type="password" id="form2Example2" class="form-control" name="password">
                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Password</label>
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                    <div class="form-notch-trailing"></div>
                </div>
            </div>

            <!-- 2 column grid layout for inline styling -->


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Sign
                in</button>

            <!-- Register buttons -->

        </form>
    </section>

</div>