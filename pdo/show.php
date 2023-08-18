<?php
    include_once "./db.php";
    $db = new DB();
    $student = $db->show($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if($student) : ?>
                    <p class="alert alert-success">ID : <?= $student->id ?></p>
                    <p class="alert alert-success">Name : <?= $student->name ?></p>
                    <p class="alert alert-success">Email : <?= $student->email ?></p>
                    <p class="alert alert-success">Password : <?= $student->password ?></p>
                    <p class="alert alert-success">Gender : <?= $student->gender ?></p>
                    <p class="alert alert-success">Age : <?= $student->age ?></p>
                    <p class="alert alert-success">Date Of Birth : <?= $student->date_of_birth ?></p>
                    <a href="./index.php" class="btn btn-outline-primary">Home</a>
                    <a href="./edit.php?id=<?= $student->id ?>" class="btn btn-outline-info">Edit</a>
                    <a href="./destory.php?id=<?= $student->id ?>" class="btn btn-outline-danger">Delete</a>
                <?php else : ?>
                    <div class="alert alert-warning">Student Not Found</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>