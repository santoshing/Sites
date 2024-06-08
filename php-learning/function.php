<?php


define("BASE_URL","http://php-learning.test/");

error_reporting(E_ALL);
$db = new mysqli('localhost', 'root', 'Admin1234', 'thetolet');
$db->set_charset('utf8');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}




//Get Feedbacks from Database

$feedback_query = $db->query("SELECT * FROM `feedbacks`");
$feedbacks = $feedback_query->fetch_all(MYSQLI_ASSOC);
//End



$places = array(

    0 => array(
        'name' => 'coxsbazar',
        'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
    ),
    1 => array(
        'name' => 'coxsbazar',
        'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
    ),
    2 => array(
        'name' => 'coxsbazar',
        'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
    ),
    3 => array(
        'name' => 'coxsbazar',
        'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
    )
);

$news = array(
    0 => array(

        'image' => 'https://www.kalerkantho.com/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2022%2F10%2F30%2F001117kalerkantho-tw-1.jpg&w=828&q=100',
        'link' => ' Kalerkantho.com '
    ),
    1 => array(
        'image' => 'https://www.azkerbangladesh.com/wp-content/uploads/2022/09/received_788449385581445-800x445.jpeg',
        'link' => 'Kalerkantho.com '
    ),
    2 => array(
        'image' => 'https://www.azkerbangladesh.com/wp-content/uploads/2022/09/received_788449385581445-800x445.jpeg',
        'link' => 'Kalerkantho.com '
    )


);
