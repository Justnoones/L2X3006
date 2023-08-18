<?php
    echo "hello world"; // document.write
    echo "<h1>Hello World</h1>" ."<br/>";
    echo 12 . "<br/>";
    echo 12.32 . "<br/>";
    echo true . "<br/>";
    echo false . "<br/>";
    var_dump(false) . "<br/>"; // bool(false)
    var_dump(true) . "<br/>"; // bool(true)
    // echo() only work on string interger float and bollean and echo() only show echo but var_dump() show not only value but also type.
    var_dump("Wai Yan Sor Ma Shi"); // string(18) "Wai Yan Sor Ma Shi"
    $name = "Wai Yan";
    echo $name; // Wai Yan
    // unser(variable) // use to delte value
    unset($name);
    echo $name; // undefined
?>
<!-- it will work even if we skip end when we only write php code -->

<!--

    Snake Case : hello_world (database, table_column, css_class)
    Camel Case : helloWorld (variable, function, from => name&key, js_id)
    Captial Case : HelloWorld (Object=>ClassName)

-->