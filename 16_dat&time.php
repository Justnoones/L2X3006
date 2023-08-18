<?php

    date_default_timezone_set("Asia/Rangoon");

    // date(format,timestamp) => string => strtotime()

    echo date("d-M-Y-(D) h:i-a") . "<br/>"; // current time

    echo date("d-M-Y(D)",strtotime("15-03-2021")) . "<br/>"; // strtotime(day-month-year) // (year-month-day)
    // we must set month in the middle otherwise error will appear

    // date_create() => convert to object // date_format(object,format) date()

    $current_date = date_create(date("c"));

    echo date_format($current_date,"d-F-Y(D) h:i:s") . "<br/>"; // date_format() can be only used with object

    // echo date_format("c"); // error

    // date_add(object,interval) // interval => date_interval_create_from_date_string()

    $current = date_create(date("d-m-Y"));
    date_add($current,date_interval_create_from_date_string("5 days")); // actually change
    echo date_format($current,"d-m-Y");

    $expire_date = date_create(date("d-m-Y")); // 04-02-2023
    
    echo "<br/>";

    date_add($expire_date,date_interval_create_from_date_string("15 days"));

    echo date_format($expire_date,"d-m-Y"); // 14-02-2023

    echo "<br/>";

    $nine_months_ago = date_create(date("e"));
    date_sub($nine_months_ago,date_interval_create_from_date_string("9 months"));
    echo date_format($nine_months_ago, "d-m-Y");

    // date_diff(date-time-one, date-time-two);

?>