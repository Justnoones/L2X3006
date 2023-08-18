<?php
    include_once "./db.php";
    $db = new DB();
    $students = $db->index();
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
        <a href="./create.php" class="btn btn-success">Create New Student</a>
        <hr/>
        <div class="row">
            <div class="col-10">
                <?php if ($students) : ?>
                    <table class="table table-striped table-bordered table-hover table-success text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($students as $student) : ?>
                            <tr>
                                <td><?php echo $student->name ?></td>
                                <td><?php echo $student->email ?></td>
                                <td><?php echo $student->age ?></td>
                                <td><?php echo ucfirst($student->gender) ?></td>
                                <td class="text-center">
                                    <a href="./edit.php?id=<?php echo $student->id ?>" class="btn btn-outline-info btn-sm me-3">Details</a>
                                    <a href="./destory.php?id=<?php echo $student->id ?>" class="btn btn-outline-danger btn-sm ms-3">Delete</a>    
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p class="alert alert-info">No Student Found In Database</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

