<?php 
    // function multiplie($val1){
    //     return $val1 * 2;
    // };

    // $result = multiplie(20);
    // echo $result;

    $name = "Wai Yan Yair Yint";

    // strlen(string); // string length

    echo strlen($name) . "<br/>"; // 19
    echo strlen("Hello Mello") . "<br/>"; // 11

    // substr(string,start,length);
    
    $txt = "Hello I'm wai yan sor ma shi.";
    echo substr($txt,6,11) . "<br/>"; // I'm wai yan
    echo substr("Hello Mello",0,5) . "<br/>"; // Hello
    echo substr("Hello Mello",6,5) . "<br/>"; // Mello

    // str_word_count(string);

    echo str_word_count($name) . "<br/>"; // 4
    echo str_word_count("Hello Mello") . "<br/>"; // 2

    // strrev(string); // string reverse

    echo strrev($name) . "<br/>"; // tniY riaY naY iaW
    echo strrev("Hello Mello") . "<br/>"; // olleM olleH

    // str_shuffle(string);
    
    echo str_shuffle($name) . "<br/>"; // different results every time reloads like ai nia arWnYYYi 
    echo str_shuffle("Hello World") . "<br/>"; // different results every time reloads like ter oolldHWl

    // strpos(string,withing); // string position

    echo strpos($name,"air") . "<br/>"; // 8
    echo strpos("Hello Mello" , "Mello") . "<br/>"; // 6
    echo strpos("Hello" , "a") . "<br/>"; // nothing

    // str_replace(old value , new value , where to);

    echo str_replace("Yair Yint" , "Sor Ma Shi",$name) . "<br/>"; // Wai Yan Sor Ma Shi
    echo str_replace("Mello","World","Hello Mello" . "<br/>"); // Hello World

    // strtoupper(string); // uppercase

    echo strtoupper($name) . "<br/>"; // WAI YAN YAIR YINT
    echo strtoupper("Hello World") . "<br/>"; // HELLO WORLD

    // strtolower(string); // lowercase

    echo strtolower($name) . "<br/>"; // WAI YAN YAIR YINT
    echo strtolower("Hello World") . "<br/>"; // HELLO WORLD

    $val = str_replace(" ","",$name); // WAIYANYAIRYINT
    echo strlen($val) . "<br/>"; // 14
    
    // ucfirst(sting); // First Capital Letter For Every Setences

    echo ucfirst("wai yan sor ma shi") . "<br/>"; // Wai yan sor ma shi

    // ucwords(string); // Capatilize , First Capital Letter For Every Words

    echo ucwords("hello mello"); // Hello Mello

    // strip_tags(html code); // strip all tags

    $test = "<h1><i>Hello World</i></h1>" . "<br/>";
    echo $test . "<br/>"; // bold and italic
    echo strip_tags($test) . "<br/>"; // normal words

    // trim(string); // strip spaces from left to write but space in center not included 

    $wai = "this is testing     wai yan     ";
    var_dump($wai) . "<br/>"; // string(32) "this is testing wai yan "
    $yan = trim($wai);
    echo "<br/>";
    var_dump($yan); // string(27) "this is testing wai yan"
    
?>