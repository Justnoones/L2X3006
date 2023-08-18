<?php 
    // these interger also works on float
    // min(interger) // show min value
    echo min(1,25,100,-5) . "<br/>"; // min

    // max(interger) // show max value
    echo max(1,25,100,-5) . "<br/>"; // 100

    // abs(interger) // absolute
    echo abs(-100) . "<br/>"; // 100

    // sqrt(interger) // square root
    echo sqrt(9) . "<br/>"; // 3

    // round(float) // show the nearest value
    echo round(1.1) . "<br/>"; // 1
    echo round(1.4) . "<br/>"; // 1
    echo round(1.5) . "<br/>"; // 2
    echo round(1.9) . "<br/>"; // 2

    // ceil(float) // whatver the numer after . it will be added 1 expect 0 
    echo ceil(1.00000000000000) . "<br/>"; // 1
    echo ceil(1.00000000000001) . "<br/>"; // 2 
    echo ceil(1.1) . "<br/>"; // 2
    
    // floor(float) // it will ingnore every single value after .
    echo floor(1.00000000000000) . "<br/>"; // 1
    echo floor(1.00000000000001) . "<br/>"; // 1 
    echo floor(1.1) . "<br/>"; // 1

    // pow(value,quantity) // 
    echo pow(15,5) . "<br/>"; // 759375

    // rand(start,end)
    echo rand(0,10) . "<br/>"; // show random values between 0 and 10

    // is_int();

    $str = "Wai Yan";
    $num = 17;
    echo is_int($str); // false
    echo is_int($num); // true
?>