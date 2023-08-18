<?php
    $name = "Alice";
    function hello() {
        echo "Hello " . $GLOBALS['name'];
    }
    hello(); // Hello Alice
?>