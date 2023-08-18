<!-- we can't print interger plain but with variable we can; -->
<?php 
    $name = "destiny";
    echo $name;
    echo "<br/>";

    $interger = 12345;
    echo $interger;
    echo "<br/>";

    $val1 = 10;
    $val2 = 20;
    echo $val1 + $val2;
    echo "<br/>"; // 30

    $result = $val1 + $val2;
    echo $result . "<br/>"; // 30

    // php conacat => . , js concat => +

    $nam1 = "Wai Yan";
    $age = 17;
    $attribute = "Still Sor Ma Shi";

    echo $nam1 . " is " . $age . " years old and " . $attribute . "<br/>";
    // Wai Yan is 17 years old and Still Sor Ma Shi

    // echo "My name is $nam1" . "<br/>"; // work
    // echo 'My name is $nam1" . "<br/>'; // doesn't work

    $valu1 = "25";
    $valu2 = 50;
    echo $valu1 + $valu2 . "<br/>"; // 75
    echo $valu1 . $valu2; // 2550
?>