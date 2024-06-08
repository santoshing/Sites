<pre>



<?php

$first_number = 10;
$second_number = 20;
$third_number = 30;
$total = $first_number + $second_number + $third_number;

$office_employees = array(array('Pias', '22'), array('Amit', '26'), array('Shanto', '24'));

$posts = array(
    1 => array(
        'id' => 1,
        'title' => 'Post One',
        'body' => 'This is post one',
        'author' => 'Pias',
        'category' => 'Web Development'
    ),
    2 => array(
        'id' => 2,
        'title' => 'Post Two',
        'body' => 'This is post two',
        'author' => 'Amit',
        'category' => 'Web Services'
    ),
    3 => array(
        'id' => 3,
        'title' => 'Post Three',
        'body' => 'This is post three',
        'author' => 'Shanto',
        'category' => 'App'
    )
);




?>

Total Number : <?php echo $total; ?>
<hr>

<!-- <?php print_r($posts[2]['author']); ?>

<hr> -->

<?php

foreach ($posts as $post) {
    echo 'Post ID :' . $post['id'] . '<br>';
    echo 'Author Name :' . $post['author'];
    echo '<hr>';
}

?>

</pre>


<table border="1">
    <tr>
        <th>Post Id</th>
        <th>Author Name</th>
    </tr>


    <?php

    foreach ($posts as $post) { ?>
        <tr>
            <td><?php echo $post['id'];  ?></td>
            <td><?php echo $post['author']; ?></td>
        </tr>

    <?php } ?>







</table>