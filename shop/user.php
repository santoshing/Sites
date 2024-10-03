<?php
require_once('library/function.php');
require_once('template/head.php');



?>
<section class="w-100 p-4 d-flex row  pb-4">
    <div>
        <h1 class="text-center">User</h1>
        <div class="row">
            <div class="col-8">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $users = $db->query("SELECT * FROM `users`");
                            foreach ($users as $user) {
                            ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>


                                <td>
                                    <a href="user-edit.php?id=<?= $user['id'] ?>" class="btn btn-primary">Edit</a>
                                    <a href="user-delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>