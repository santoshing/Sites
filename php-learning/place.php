<div class="row mt-3 mb-3">
    <div class="text-center">
        <h3>Most popular Place</h3>
        <p>PROPERTIES IN MOST POPULAR PLACES</p>
    </div>

    <!-- get places from database -->
    <?php
    $places_query = $db-> query ("SELECT * FROM `places`");
    $places = $places_query->fetch_all(MYSQLI_ASSOC);


    ?>


    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        foreach ($places as $place) { ?>

        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex gap-2  ">

                    <div style="border: 1px solid black; ">
                        <span class=""> <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5">
                                </path>
                            </svg> </span>
                    </div>
                    <h5><?php echo $place['name'] ?></h5>



                </div>
                <div class="col">
                    <h6 class="text-muted"> <?php echo $place['comment'] ?></h6>
                    <div class="text-decoration-none"></div>
                </div>
            </div>
        </div>

        <?php   }
        ?>
    </div>