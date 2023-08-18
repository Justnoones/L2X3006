<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>

    <?php $user = "male"; ?>
        <select>
            <option value="">Choose Gender</option>
            <option value="" <?php if($user == "male"){    echo "selected";} ?>>Male</option>
            <option value=""  <?php if($user == "female"){    echo "selected";} ?>>Female</option>
        </select>

    </body>
</html>