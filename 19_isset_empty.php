<?php

$asso_array = [
    "name" => "Wai Yan",
    "email" => "waiyan@gmail.com",
    "phone" => null
];

// isset() => check value
var_dump(isset($asso_array["name"])); // bool(true)

// empty() => check value
var_dump(empty($asso_array["phone"])); // bool(true)

if(isset($asso_array["phone"])){
    $user_phone["phone"] = $asso_array["phone"];
}else{
    $user_phone = null;
}

var_dump($user_phone);

?>