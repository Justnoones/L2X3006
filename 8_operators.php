<?php

// Arithmetic operators ( + , - , * , / , % )

$val1 = 3;
$val2 = 4;

echo $val1 + $val2; // 7

echo "<br/>";

echo $val1 - $val2; // -1

echo "<br/>";

echo $val1 * $val2; // 12

echo "<br/>";

echo $val1 / $val2; // 0.75

echo "<br/>";

echo $val1 % $val2; // 3

echo "<br/>";

echo $val1 ** $val2; // 81

echo "<br/>";

// Assigment operators ( = , += , -= , *= , /= , %= )

$x = 10;

echo $x; // 10

echo "<br/>";

$x += 100; // $x = $x + 100;

echo $x; // 110

echo "<br/>";

$x += 40; // $x = $x + 40

echo $x; // 150

echo "<br/>";

$x -= 50; //$x = $x - 50

echo $x; // 100

echo "<br/>";

$x *= 2; // $x = $x * 2

echo $x; // 200

echo "<br/>";

$x /= 2; // $x = $x / 2

echo $x; // 100

echo "<br/>";

$x %= 3; // $x = $x % 3

echo $x; // 1

echo "<br/>";

// Comparison operators ( == , === , != , !== , > , >= , < , <=)

$x = 100;
$y = 100;

var_dump($x == $y); // bool(true)

echo "<br/>";

echo ($x == $y); // 1

echo "<br/>";

$x = 100;
$y = "100";

var_dump($x == $y); // bool(true);
echo "<br/>";
var_dump($x === $y); // bool(false)

echo "<br/>";

$x = 100;
$y = 50;
$z = "100";

var_dump($x != $z); // bool(false)
echo "<br/>";
var_dump($x !== $y); // bool(true)
echo "<br/>";
var_dump($y !== $z); // bool(true)
echo "<br/>";

$x = 100;
$y = 50;

var_dump($x > $y); // bool(true)
echo "<br/>";
var_dump($y < $x); // bool(true)
echo "<br/>";

$x = 50;
$y = 50;
$z = 20;

var_dump($x >= $y); // bool(true)
echo "<br/>";
var_dump($x >= $z);
echo "<br/>"; // bool(true)

$x = 50;
$y = 50;
$z = 60;

var_dump($x <= $y); // bool(true)
echo "<br/>";
var_dump($x <= $z);
echo "<br/>"; // bool(true)

// increment or decrement operators( ++$x , $x++ , --$x , $x-- )
// ++ == +1
// -- == -1

$x = 10;

echo $x; // 10
echo "<br/>";
echo ++$x; // 11
echo "<br/>";

$x = 10;

echo $x; // 10
echo "<br/>";
echo $x++; // 10
echo "<br/>";
echo $x++; // 11

echo "<br/>";

$y = 10;

echo $y; // 10
echo "<br/>";
echo --$y; // 9
echo "<br/>";

$y = 10;

echo $y; // 10
echo "<br/>";
echo $y--; // 10
echo "<br/>";
echo $y--; // 9
echo "<br/>";

// Logical operators ( && , || , !)

$x = 10;
$y = 20;

if ($x < 20 && $y == 20){
    echo "Hello";
}

echo "<br/>";

if ($x > 7 || $y < 30){
    echo "Mello";
}

echo "<br/>";

if (!($x < 1)){
    echo "Hello";
}

echo "<br/>";

$x = 10;
$y = &$y; // &sign will store two variable at same memory loaction
echo $x, $y; // 10, 10
$y = 50; // 
echo $x, $y; // 50, 50

// Conditional assigment operators ( ? : )

$status = "Hello";

echo $status == "Hello" ? "This is greeting." : "This is farwell."; // This is greeting.

?>