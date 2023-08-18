<?php
    if($_POST["user_name"] == "Wai Yan" && $_POST["user_password"] == "12345") {
        session_start();
        $_SESSION["user_name"] = "Wai Yan";
        $_SESSION["logged_in"] = true;
        session_destroy(); // delete all session data
        unset($_SESSION["name"]); // delte in current page not in session
        header("location:./login.php");
    } else {
        echo "User Name or User Password is wrong please try again.";
    }
?>