<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form action="./sever.php" method="POST">
            <div class="form-floating my-3">
                <input type="text" name="first number" id="fn" class="form-control" placeholder="First Number"/>
                <label for="fn" class="form-label">First Number</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" name="second number" id="sn" class="form-control" placeholder="Second Number"/>
                <label for="sn" class="form-label">Second Number</label>
            </div>
            <select name="sign" id="sign" class="form-select my-3">
                <option selected disabled>Choose Sign</option>
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiplie">Multiplie</option>
                <option value="divide">Divide</option>
            </select>
            <button class="btn btn-success">Solve Now</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>