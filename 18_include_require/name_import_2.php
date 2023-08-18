<?php

    include_once "./name_import_1.php";
    
    // use Library\Helper\Math\Basic\Calculator;

    // $calc1 = new Calculator;
    // $calc2 = new Calculator;

    use Library\Helper\Math\Basic\Calculator as Math;

    $calc1 = new Math;
    $calc2 = new Math;

    echo $calc1->add([1,2]);

?>