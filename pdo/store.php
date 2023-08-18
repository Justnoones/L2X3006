<?php
    include_once "./db.php";
    $db = new DB();
    $db->store($_POST);
?>