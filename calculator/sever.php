<?php
  $first_num = $_POST["first_number"];
  $second_num = $_POST["second_number"];
  $sign = $_POST["sign"];
  $result;
  if(is_numeric($first_num) && is_numeric($second_num)) {
    switch($sign){
      case "add":
        $result = $first_num + $second_num;
        $output = "<h1 class='alert-success'>The result of {$first_num} + {$second_num} is {$result}</h1>";
        break;
      case "subtract":
        $result = $first_num - $second_num;
        $output = "<h1 class='alert-success'>The result of {$first_num} - {$second_num} is {$result}</h1>";
        break;
      case "multiplie":
        $result = $first_num * $second_num;
        $output = "<h1 class='alert-success'>The result of {$first_num} * {$second_num} is {$result}</h1>";
        break;
      case "divide":
        $result = $first_num / $second_num;
        $output = "<h1 class='alert-success'>The result of {$first_num} / {$second_num} is {$result}</h1>";
        break;
      default:
        $output = "<h1 class='alert-danger'/>Please choose sign and try again.</h1>";
    }
  } else  {
    $output = "<h1 class='alert alert-adnger'>First Number or Second Number is not a number or empty please enter a number and try again.</h1>";
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
  <h3><?= $output; ?></h3>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>