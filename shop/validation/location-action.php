<?php 
require_once('../library/function.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $query = "SELECT * FROM location WHERE name = '$name'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "name already exist";
        $_SESSION['error'] = "name already exist";
        header('location: '.BASE_URL.'location.php');
    }

    else {
        $query = "INSERT INTO location (name) VALUES ('$name')";
        $result = mysqli_query($db, $query);
        if ($result) {
            echo "success";
        }
    }
     header('location: '.BASE_URL.'location.php');


}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $query = "UPDATE location SET name = '$name' WHERE id = $id";
    $result = mysqli_query($db, $query);
    if ($result) {
        echo "success";
    }
    header('location: '.BASE_URL.'location.php');
}

    

?>