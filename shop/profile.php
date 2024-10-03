<!-- father_name,mother_name,present_address,permanent_address,blood_group,birth_date,gender,email,phone,image -->
<?php 
require_once('library/function.php');
require_once('template/head.php');
?>
<?php if(!isset($_SESSION['logged']))

{ exit(); }?>

<!-- <?php
$user = "SELECT * FROM users WHERE email = '{$_SESSION['email']}'";

$result = mysqli_query($db, $user);
$user = mysqli_fetch_assoc($result);
var_dump($user);

?> -->



<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                        <form action="<?php echo VALIDATION_URL?>profile-action.php" method="post">

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" name="father_name" class="form-control form-control-lg"
                                            value="" />
                                        <label class="form-label" for="firstName">Father
                                            Name</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" name="mother_name" class="form-control form-control-lg" />
                                        <label class="form-label" for="lastName">Mother Name</label>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" name="present_adress" class="form-control form-control-lg"
                                            value="<?php echo $user['present_address']?>" />
                                        <label>Present adress</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" name="permanet_adress" class="form-control form-control-lg"
                                            value="<?php echo $user['permanent_address']?>" />
                                        <label>permanent adress</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <input type="text" class="form-control form-control-lg" name="birthday_date"
                                            value="<?php echo $user['birth_date']?>" />
                                        <label for="birthdayDate" class="form-label">Birthday date</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Gender: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                            value="female" checked />
                                        <label class="form-check-label" for="femaleGender">Female</label>


                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                            value="male" />
                                        <label class="form-check-label" for="maleGender">Male</label>



                                    </div>



                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" name="phone" class="form-control form-control-lg" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" name="blood_group" class="form-control form-control-lg"
                                            value="<?php echo $user['blood_group']?>" />
                                        <label class="form-label" for="">Blood Group </label>
                                    </div>

                                </div>

                            </div>

                            <div class="mt-4 pt-2">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit"
                                    name="submit" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>