<?php
    include_once("./template/connection.php");
?>

<?php
    $id = $_GET['userId'];
    $sql = "DELETE FROM user WHERE id = '$id' ";
    $query = mysqli_query($connection,$sql);

    if($query) {
        header("location: ./index.php");
    }else {
        echo "Delete fail" . mysqli_error();
    }
?>