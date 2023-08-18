<?php   include_once("./template/header.php"); ?>
<?php   include_once("./template/connection.php"); ?>
<?php
    $id = $_GET["userId"];
    $sql = "SELECT * FROM user WHERE id = $id";
    $query = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($query);
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <div class="h5 card-title text-center">Update User</div>
                        <form action="" method="post">
                            <input type="hidden" name="userId" value=<?= $data["id"] ?> />
                            <div class="form-floating  mb-2">
                                <input type="text" name="userName" id="name" class="form-control" placeholder="Name" autocomplete="off" value="<?= $data['name'] ?>" />
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating  mb-2">
                                <input type="text" name="userPhone" id="phone" class="form-control" placeholder="Phone" autocomplete="off" value="<?= $data['phone'] ?>" />
                                <label for="phone">Phone</label>
                            </div>
                            <input type="submit" name="updateBtn" class="btn btn-secondary float-end" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php   include_once("./template/footer.php"); ?>

<?php
    $data = $_POST;
    if(isset($_POST["updateBtn"])) {
        $userId = htmlentities($_POST["userId"]);
        $userName = htmlentities($_POST["userName"]);
        $userPhone = htmlentities($_POST["userPhone"]);
        $updateSql = "UPDATE user SET name = '$userName', phone = '$userPhone' WHERE id = '$userId'";
        $updateQuery = mysqli_query($connection, $updateSql);
        
        if($updateSql) {
            header("location: ./index.php");
        } else {
            echo "Update Error" . mysqli_error();
        }
    }
?>