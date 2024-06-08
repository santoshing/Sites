<div class="row mt-3 mb-3">
    <div class="text-center  ">
        <h3>Feedback </h3>

        OUR USERS SEND US BUNCH OF SMILIES WITH OUR SERVICES, AND WE LOVE THEM 😍
    </div>

    <?php
    $posts_query = $db->query("SELECT * FROM `feedbacks`");
    $feedbacks = $posts_query->fetch_all(MYSQLI_ASSOC);
    
    ?>
    <div class="row row-cols-1 row-cols-md-3 g-4">


        <?php
        foreach ($feedbacks as $feedback) {
            echo '<div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">' . $feedback['name'] . '</h5>
                    <p class="card-text text-show three-line">' . $feedback['comment'] . '</p>
                </div>
            </div>
        </div>';
        }
        ?>


    </div>