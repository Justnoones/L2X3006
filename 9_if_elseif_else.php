<?php

// if(condition){ 
//     statement // this wiil work when condition is true
// }elseif(condition){
//     this will will considered as an optional statement if the first condition is not true.
// }else{
//     this will work if none of the above is not true
// }

$num = 1;

if($num === 1){
    echo $num . " is equal to 1." . "<br/>";
}elseif ($num > 1) {
    echo  $num ." is greater than 1." . "<br/>";
}elseif($num < 1){
    echo $num ." is less than 1" . "<br/>";
}else{
    echo "Something went wrong please try again." . "<br/>";
}

// Trunty Falsy

// false
// 0 // zero
// "" // empty string
// null
// undefined
// NaN(Not a Number)
// empty array // $test = []

?>