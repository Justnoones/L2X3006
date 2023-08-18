<?php
            // key  // value // expiredate      // filepath
    setcookie("name", "jhon", time()+60*60*24*30, "/");
    var_dump($_COOKIE);
    unset($_COOKIE["name"]); // delte in current page not in cookie
    setcookie("name", "", time() -1); // also delete
    var_dump($_COOKIE);
?>