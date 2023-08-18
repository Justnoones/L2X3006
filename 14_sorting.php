<?php

// indexed array
// array_order => interger , capital letter , small letter

$fruits = ["Apple", "Mango", "Banana", "Orange", "Grape"];

// sort(array) // ascending order
sort($fruits); // change permanently
var_dump($fruits);

echo "<br/>";

for($i=0; $i < count($fruits); $i++){
    echo $fruits[$i] . "<br/>";
}

// rsort(array) // descending order

rsort($fruits);
var_dump($fruits);
echo "<br/>";
for($i=0; $i < count($fruits); $i++){
    echo $fruits[$i] . "<br/>";
}

// associative array

$users = [
    "name" => "mg mg",
    "age" => 16,
    "job" => "developer"
];

// asort(array) // ascending value order

asort($users);
echo "<pre>";
var_dump($users);

// arsort(array) // descending value order

arsort($users);
var_dump($users);

// ksort(array) // ascending key order

ksort($users);
var_dump($users);

// krsort(array) // descending key order

krsort($users);
var_dump($users);


?>