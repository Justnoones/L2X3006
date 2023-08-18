<?php

    for($i = 0; $i <= 100; $i++) {
        if($i % 3 == 0) {
            echo "<p>Fizz</p>";
        }elseif($i % 5 == 0) {
            echo "<p>Buzz</p>";
        }elseif($i % 3 == 0 && $i % 5 == 0) {
            echo "<p>FizzBuzz</p>";
        }else {
            $i;
        }
    }


    function Hello($i) {
        for($x = 1; $x <= $i; $x++){
            echo "<p>{$x}</p>";
        }
    }

    Hello(5);
    Hello(3);
    Hello(10);