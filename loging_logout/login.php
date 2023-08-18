<?php
    session_start();
    if(empty($_SESSION["logged_in"])){
        $_SESSION["logged_in"] = false;
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php if($_SESSION["logged_in"]) : ?>
                <h2 class="my-3">Hello <?= $_SESSION["user_name"] ?></h2>
                <p class="h3">You have sucessfully logged in</p>
                <a href="logout.php" class="btn btn-light text-primary btn-lg">Log Out</a>
            <?php else : ?>
            <form action="./session.php" method="POST">
                <div class="form-floating my-3">
                    <input type="text" name="user_name" id="username" class="form-control" placeholder="User Name" />
                    <label for="username">User Name</label>
                </div>
                <div class="form-floating my-3">
                    <input type="password" name="user_password" id="userpassword" class="form-control" placeholder="User Password" />
                    <label for="userpassword">User Password</label>
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Log In</button>
            </form>
            <?php endif; ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>