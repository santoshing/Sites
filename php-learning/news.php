<div class="row">
    <H2 class="text-center"> News coverage </H2>
    <p c>PROPERTIES IN MOST POPULAR PLACES</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php

    $news_query = $db->query("SELECT * FROM `news`");
    $news = $news_query->fetch_all(MYSQLI_ASSOC);
    ?>

        <?php
        foreach ($news as $new) {
            echo '<div class="col">
            <div class="card h-100">
                <div class="card-body">
                   <a><img src="' . $new['image'] . '" class="card-img-top" alt="..."></>
                    <h5 class="card-title">' . $new['link'] . '</h5>
                </div>
            </div>
        </div>';
        }
        ?>


    </div>

</div>
</div>