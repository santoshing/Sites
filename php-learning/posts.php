
<div class="row">
    <div class="text-center">
        <h2> Recent Posts</h2>
    </div>
</div>
<?php 
//Get Posts from Database
$posts_query = $db->query("SELECT * FROM `posts`");
$posts = $posts_query->fetch_all(MYSQLI_ASSOC);
//End

?>
<div class="row">
            <?php foreach ($posts as $post) { ?>
                <div class="col-md-2 col-sm-4 col-xs-6 color ">
                    <div class="card mb-2 box-shadow card-custom ; " style="background-color: #f2f8f9">
                        <div class="">
                            <img class="card-img-top background-image-4x3" style="background-image: url('<?php echo $post['image']; ?>');">
                        </div>
                        <div class="card-header  ">
                            <div class="  ">
                                <div class="">
                                    <div class="roboto-bold one-line"> <?php echo $post['title']; ?>

                                    </div>
                                </div>

                                <div class=" col">
                                    <div class="row">
                                        <div class="col custom-card-info">Bedroom : <?php echo $post['bed_room']?>  Bathroom : <?php echo  $post['bath_room']; ?></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col custom-card-info one-line">To-let from: <i><?php echo $post['rent_from'] ?></i> <br> </div>
                                </div>
                                <div class="row">
                                    <div class="col custom-card-info one-line"> <?php echo $post['rent'] ?></div>
                                </div>

                                <div class="row">
                                    <div class="col custom-card-info one-line"><?php echo $post['location'] ?> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php   } ?>
        </div>