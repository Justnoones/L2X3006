<?php
    include_once "./db.php";
    $db = new DB();
    $db->update($_POST);
?>