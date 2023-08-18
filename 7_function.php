<?php
// function declaretion

// function function_name(){
//     code flow
// }

// user define function

// void function

function write_message(){
    echo "this is from function";
}

write_message(); // this is from function 

echo "<br/>";

function greeting(){
    $name = "aung aung";
    echo "Hello I'm " . $name . " from function.";
}

greeting(); // Hello I'm aung aung from function.

echo "<br/>";

function sum(){
    $val1 = "25";
    $val2 = "50";
    $result = $val1 + $val2;
    echo "This is val1 + val2 " . $result . " from function.";
}

sum(); // This is val1 + val2 75 from function.

echo "<br>";

// argument function

function single_para($name){
    echo $name . "is my friend.";
}

single_para("Kyaw Gyi "); // Kyaw Gyi is my friend.

echo "<br/>";

function multi_para($name,$age){
    echo "name: " . $name . ";" . "<br/>" . "age: " . $age . ";";
}

multi_para('snoop dogg' , 51); // name: snoop dogg; age: 51;
echo "<br/>";
multi_para('eminem' , 50); // name: snoop eminem; age: 50;

echo "<br/>";

function multiply($val1,$val2){
    echo $val1 * $val2;
}

multiply(5,35); // 75

echo "<br/>";

// type function

function add_numbers($a,$b){
    return $a + $b;
}

echo add_numbers(5,5); // 10

echo "<br/>";

// void function is used to show result in document
// type function is used to keep value

// scope

$fruit = "Mango";

function fru(){
    $fruit = "Apple";
    echo $fruit . " this is $fruit inside function.";
}

fru();

echo "<br/>";

echo $fruit . " this is $ fruit outside function";

// the fact is code outside of the function doesn't impact cod from inside

echo "<br/>";

// default function

function user($name = "mg mg"){
    echo "I am " . $name . ".";
}

// self invoking function

(function($name, $age){
    echo "I'm $name and $age years old.";
})("Wai Yan", 17); // I'm Wai Yan and 17 years old.

// first class function
// variable = fuction
// anonymous function
$hello = function() {
    return "Hello this is from first class function.";
};

echo $hello(); // Hello this is from first class function.

user();
echo "<br/>";
user("weirdo");
echo "<br/>";

$one = 1;

if ( $one == 1 and $one == 0){
    echo "true";
}else{
    echo "false";
}

echo "<br/>";

if ( $one == 1 and $one > 0){
    echo "true";
}else{
    echo "false";
}

// higher order function // function can take another function as argument // can return a function
function one($func) {
    var_dump($func); // hello this is from two
}
// higher order function
function two() {
    return "hello this is from two";
}

echo "<br/>";
one(two()); // "hello this is from two"
echo "<br/>";


// closure // function infunction
function ichi() {
    function ni() {
        return "hello this is from function ni.";
    }
    echo ni();
}

ichi(); // hello this is from function ni.
echo "<br/>";
$data = [10, 20, 30];

function mapper ($items, $fun) {

    $result = [];

    foreach($items as $item){
        $result[] = $fun($item);
    }

    return $result;
}

$result = mapper($data, function($item){
    return $item * 5;
});

var_dump($result);

?>