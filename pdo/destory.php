<?php
    include_once "./db.php";
    $db = new DB();
    $db->destory($_GET["id"]);
?>