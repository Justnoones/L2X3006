<?php

// indexed array

$fruits = ["Apple", "Mango", "Banana", "Orange", "Grape"];

// count() // array's length
// array_key_exists("key", $array) // return true if the key exists in array
// is_array($variable) // return true if the variable is array

echo count($fruits) . "<br/>"; // 5

// current() // first indexed room

echo current($fruits) . "<br/>"; // Apple

// end() // last indexed room

echo end($fruits) . "<br/>"; // Grape

// array_rand() // random indexed room

echo array_rand($fruits) . "<br/>"; // show index randomly
echo $fruits[array_rand($fruits)] . "<br/>"; // show room randomly

// in_array(value, array) // whether value is in array or not // bollean
// is_array(array) // whether array or not // return with bollean
// array_search(value, array) // return index
// array_splice(array,start,number) // start point is the refers to index to start number refers number to delete
// explode(breakpoint, string) // is used to convert string into array
// explode(" ", $array) // this will make array every after space
// implode(breakpoint, array) //is used to convert array into string

var_dump(in_array("Apple", $fruits)); // bool(true)
echo "<br/>";
var_dump(in_array("Pineapple", $fruits)); // bool(false)
echo "<br/>";

// array_sum(array) // sum all interger in array
// skip string

$numbers = [25, 50, 10, 15, 60, "apple", 100];
echo array_sum($numbers) . "<br/>"; // 260

// range(start, end) // build an array from start to end

$indexedArray = range(10, 20);
echo "<pre>";
print_r($indexedArray); // [0] => 10[1] => 11[2] => 12[3] => 13[4] => 14[5] => 15[6] => 16[7] => 17[8] => 18[9] => 19[10] => 20

// associative array

$users = [
    "name" => "mg mg",
    "age" => 16,
    "job" => "developer"
];

// array_keys(array) // show all keys in asso array

var_dump(array_keys($users)); // ["name", "age", "job"]
echo "<br/>";

// array_values(array) // show all values in asso array

var_dump(array_values($users)); // ["mg mg", 16, "developer"]

// array_key_exists("key", array) // check if key is exist in array or not

var_dump(array_key_exists("name", $users)); // bool(true)
echo "<br/>";
var_dump(array_key_exists("address", $users)); // bool(true)
echo "<br/>";

// shuffle() // shuffle row in asso array

shuffle($users);
var_dump($users); // values are randomly changeing every times reload
echo "<br/>";

// push pop shift unshift
// these method change original value

$name = ["Aung Aung", "Hla Hla", "Mya Mya", "Kyaw Kyaw"];

// array_push(array, value) // add value into array from (back)

echo end($name) . "<br/>"; // Kyaw Kyaw
array_push($name, "Mg Mg"); // +1 (back)
echo end($name) . "<br/>"; // Mg Mg

// shift(array, value) // add value into array from the (front)

echo $name[0] . "<br/>"; // Aung Aung
array_unshift($name, "Ei Ei") . "<br/>"; // +1 (front)
echo $name[0] . "<br/>"; // Ei Ei

// array_pop(array) // remove value from array from (back)

echo end($name) . "<br/>"; // Mg Mg
array_pop($name); // -1 (back)
echo end($name) . "<br/>"; // Kyaw Kyaw

// array_shift(array) // remove value from array from (front)

echo $name[0] . "<br/>"; // Ei Ei
array_shift($name); // -1 (front)
echo $name[0] . "<br/>"; // Aung Aung

// explode(breakpoint, variable) // convert variable into array

$words = "This is a variable with seven words";
var_dump(explode(' ', $words)); // this said convert an array after every space
// array(7) {
//     [0]=>
//     string(4) "This"
//     [1]=>
//     string(2) "is"
//     [2]=>
//     string(1) "a"
//     [3]=>
//     string(8) "variable"
//     [4]=>
//     string(4) "with"
//     [5]=>
//     string(5) "seven"
//     [6]=>
//     string(5) "words"
//   }

// implode(breakpoint, variable); // convert array into variable

$a = [1, 2, 3, 4, 5];
$b = ["one" => 1,
      "two" => 2,
      "thre" => 3,
      "four" => 4,
      "five" => 5
      ];

echo implode(",", $a) . "<br/>"; // 1,2,3,4,5
echo implode(",", $b); // 1,2,3,4,5
?>