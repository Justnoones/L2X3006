<?php

// loop(while, do while, for, foreach)

// while
// while(condition){
//     statement
// }

$num = 0;

while($num <= 10){
    echo $num . "<br/>";
    $num++; // show 1 to ten
}

// do{
    // 	statement
// }while(condition)
    
$num = 0;
    
do{
    echo $num . "<br/>";
    $num++;
}while($num <= 10);
    
$num = 0;
    while($num >= 10){
    echo $num . "<br/>";
    $num++;
} // output none
    
$num = 0;
    
do{
    echo $num . "<br/>";
    $num++;
}while($num >= 10); // output 0
    
// while loop check the condition then process the statemtnt
// do while loop process the statement then check the condition
    
// for(declare;condition;increment(or)decrement){
// 	statement
// }

$fruits = ["apple", "orange", "mango", "banana", "grape"];

for($i = 0; $i<count($fruits); $i++){
    echo "I like " . $fruits[$i] . "<br/>";
}

for($i=count($fruits)-1;$i>=0;$i--){
    echo "I like " . $fruits[$i] . "<br/>";
}

// foreach
// foreach(array as parameter){
//     statement
// }

$userData = [
    ["name" => "mg mg", "job" => "developer"],
    ["name" => "ei ei", "job" => "designer"],
    ["name" => "kyaw kyaw", "job" => "full stack developer"]
];

foreach($userData as $user){
    echo $user["name"] . " is " . $user["job"] . "<br/>";
}

$val = 10;

while($val >= 0){
    if($val == 5){
        break;
    }
    echo $val . "<br/>";
    $val--;
} // this loop will stop at 5

for($i=0;$i<=10;$i++){
    if($i == 5){
        continue;
    }
    echo $i . "<br/>";
} // this loop will skip 5

$person = [
    "name" => "Wai Yan",
    "age" => 17,
    "job" => "learner"
];
        // array // key  // value 
foreach($person as $key => $value) {
    echo "<p>{$key} - {$value}</p>";
}

// name - Wai Yan

// age - 17

// job - learner

        // (we can skip the key than first argument becomes value)
foreach($person as $value) {
    echo "<p>I'm {$value}.</p>";
}

// I'm Wai Yan.

// I'm 17.

// I'm learner.

?>