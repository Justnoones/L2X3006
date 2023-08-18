<?php

    include_once("auto_load.php");

    use L2X3006\Helper\Math\Basic\name_import_1;

    $calc = new name_import_1;
    echo $calc->add([1,2]); // 3

?>