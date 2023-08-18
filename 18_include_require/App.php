<?php
    namespace Style;
    include_once("./Math.php"); // namespace Math;
    include_once("./Calculator.php"); // namespace Calculator;
    include_once "./Style.php"; // namespace Style
    // include "./Style.php"; // namespace Style

    minus(5, 10); // -5
    \Math\add(1,2); // 3
    \Calculator\add([2, 3, 4]); // 9
    // Math\add(1, 2); // error // work unti App.php doesn't have namespace // file_path(Math\Math\add())
    // Style\Calculator\add([ 2, 3, 4 ]); // error // work unti App.php doesn't have namespace // file_path(Math\Calculator\add())

?>