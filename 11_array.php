<?php

// we use array to keep the vlue in array that is more than one
// array cam keep different data types
// array's index start from 0 and 1 and so on

$cars = ["Volvo", "BMW", "TOYOTA"];
$numbers = [1, 2, 3, 4, 5];
$aray = ["BMW", 12, 12.3, true];

// echo $cars; // error
var_dump($cars); // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "TOYOTA" }
echo "<br/>";

$items = array(1, 2, 3, 4, 5); // array()

// Indexed Arrays

$even = [2, 4, 6, 8];
var_dump($even); // array(4) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(8) }
echo "<br/>";

// Array can't be invoked by echo but value that is inside of array can be invoked by echo
// invoking with echo before show the result echo at first convert values into string

var_dump($even[1]); // int(4)
echo "<br/>";
echo $even[1] . "<br/>"; // 4

$data = ["Aung Aung", "Mg Mg", 24, 50, true];
echo $data[1] . "<br/>"; // Mg Mg
var_dump($data[1]) . "<br/>"; // string(5) "Mg Mg"

// echo data; => toString(data) => output

$name = "Mg Mg";
echo "My name is $name" . "<br/>"; // My name is Mg Mg
echo 'My name is $name' . "<br/>"; // My name is $name

$data = ["Aung Aung", "Mg Mg", 24, 50, true];
var_dump($data[0]); // string(9) "Aung Aung"
echo "<br/>";
$data[0] = "Mya Mya";
var_dump($data[0]); // string(7) "Mya Mya"
echo "<br/>";

// echo is similar to print
// var_dump() is similar to ptint_r()

print_r($data); // Array ( [0] => Mya Mya [1] => Mg Mg [2] => 24 [3] => 50 [4] => 1 )\
echo "<br/>";

$data[] = "Hla Hla"; // this value will be added to the last index of array $data
print_r($data); // Array ( [0] => Mya Mya [1] => Mg Mg [2] => 24 [3] => 50 [4] => 1 [5] => Hla Hla )
echo "<br/>";

$data[7] = "Su Su";
print_r($data);
echo "<br/>"; // Array ( [0] => Mya Mya [1] => Mg Mg [2] => 24 [3] => 50 [4] => 1 [5] => Hla Hla [7] => Su Su )
// index 6 will be left empty value

// count(array) count array's length

echo count($data); // 7
echo "<br/>";

// Associative array
// [key => value, .........];

$age = [
    "peter" => 23,
    "harry" => 24,
    "joe" => 21,
    "rick" => 22
];

$age = ["peter" => 23, "harry" => 24, "joe" => 21, "rick" => 22];

var_dump($age); // array(4) { ["peter"]=> int(23) ["harry"]=> int(24) ["joe"]=> int(21) ["rick"]=> int(22) }
echo "<br/>";

print_r($age["peter"]); // 23
echo "<br/>";
echo $age["joe"] . "<br/>"; // 21
echo count($age) . "<br/>"; // 4

$data = ["name" => "Mg Mg", "age" => 16, "address" => "pakokku"];

echo $data["name"] . "<br/>"; // Mg Mg
echo $data["age"] . "<br/>"; // 16
echo $data["address"] . "<br/>"; // pakokku

$users = [
    "peter" =>[
        "age" => 23,
        "gender" => "male",
        "job" => "designer"],
    "quagmire" =>[
        "age" => 23,
        "gender" => "male",
        "job" => "developer"],
    "brian" =>[
        "age" => 23,
        "gender" => "male",
        "job" => "full stack developer"]
];

print_r($users); // Array ( [peter] => Array ( [age] => 23 [gender] => male [job] => designer ) [quagmire] => Array ( [age] => 23 [gender] => male [job] => developer ) [brian] => Array ( [age] => 23 [gender] => male [job] => full stack developer ) )
echo "<br/>";

print_r($users["quagmire"]); // Array ( [age] => 23 [gender] => male [job] => developer )
echo "<br/>";

print_r($users["quagmire"]["job"]); // developer
echo "<br/>";

print_r($users["quagmire"]["gender"]); // male
echo "<br/>";

$replace = ["age" => 15, "status" => "stupid af"];
print_r($replace["age"]); // 15
echo "<br/>";
$replace["age"] = 16;
print_r($replace["age"]); // 16

$userData = ["name" => "mg mg", "age" => 15];
var_dump($userData); // 16array(2) { ["name"]=> string(5) "mg mg" ["age"]=> int(15) }
echo "<br/>";
$userData["job"] = "developer";
var_dump($userData); // array(3) { ["name"]=> string(5) "mg mg" ["age"]=> int(15) ["job"]=> string(9) "developer" }

$abc = [
    "name" => "kyaw gyi",
    "age" => 16,
    "kg ma ly" => false
];

print_r($abc);

?>