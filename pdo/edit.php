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
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if ($student) : ?>
                <h3>Edit Student</h3>
                <form action="./update.php" method="POST">
                    <div class="form-floating my-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off" value="<?= $student->name ?>" />
                        <label for="name" class="form-label">Name</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" autocomplete="off" value="<?= $student->email ?>" />
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" value="<?= $student->password ?>" />
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="my-3">
                        <select name="gender" id="gender" class="form-select">
                            <option disabled>Gender</option>
                            <option value="male" <?php if($student->gender == "male") { echo "selected"; } ?>>Male</option>
                            <option value="female" <?php if($student->gender == "female") { echo "selected"; } ?>>Female</option>
                        </select>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" name="age" id="age" class="form-control" placeholder="Age" autocomplete="off" value="<?= $student->age ?>" />
                        <label for="age" class="form-label">Age</label>
                    </div>
                    <div class="my-3">
                        <label for="date_of_birth" class="form-label">Date Of Birch</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="<?= $student->date_of_birth ?>" />
                    </div>
                    <input type="hidden" name="id" value="<?= $_GET["id"] ?>" />
                    <button class="btn btn-primary">Update Student</button>
                    <a href="./index.php" class="btn btn-danger">Cancel</a>
                </form>
                <?php else : ?>
                <p class="alert alert-warning">Student not found</p>
                <?php endif ; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>