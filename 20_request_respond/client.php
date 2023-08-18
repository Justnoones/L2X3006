<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    </head>
<body>

<?php
    // Get Method // Post Method
    // Get Method => a href, form, url
    // a href="url?key=value&age=16"
    $myacc = [
        "name" => "Tun Tun",
        "job" => "Developer"
    ];
    echo $myacc["name"];
    echo $myacc["job"];
?>

<a href="./sever.php?name=<?= $myacc["name"]; ?>&age=<?php echo $myacc["job"]; ?>">Send to sever</a>

<?php

    // Get Method // form
    // action similar to href
    // form method="GET"
    // name="" = key
    // user_data = value
    // submit btn

?>

<form action="./sever.php" method="Get">
    <input type="text" name="Get Name" placeholder="Enter Your Full Name..." />
    <input type="email" name="Get Email" placeholder="Enter Your Email..." />
    <input type="password" name="Get Password" placeholder="Enter Your Password..." />
    <input type="submit" value="send"/>
</form>


<?php

    // Post Method // form
    // action similar to href
    // form method="POST"
    // name="" = key
    // user_data = value
    // submit btn

?>

<form action="./sever.php" method="Post">
    <input type="text" name="Post Name" placeholder="Enter Your Full Name..." />
    <input type="email" name="Post Email" placeholder="Enter Your Email..." />
    <input type="password" name="Post Password" placeholder="Enter Your Password..." />
    <input type="submit" value="send"/>
</form>

</body>
</html>