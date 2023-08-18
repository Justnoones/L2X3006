<?php

// switch(parameter){
//     case value1 :
//         statement;
//         break;
//     case value2 :
//         statement;
//         break;
//     default :
//         statement;
// }

$name = "mg mg";

switch($name){
    case "su su" :
        echo "welcome " . $name . "<br/>";
        break;
    case "ei ei" :
        echo "welcome " . $name . "<br/>";
        break;
    case "wai yan" :
        echo "welcome " . $name . "<br/>";
        break;
    default :
        echo "welcome whoever you're" . "<br/>";
}

$val = "25"; // switch condition compares using ==


switch($val){
    case 25 :
        echo "string" . "<br/>";
        break;
    case "25" :
        echo "interger" . "<br/>";
        break;
}

?>