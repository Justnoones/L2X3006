<?php   include_once("./template/header.php"); ?>
<?php   include_once("./template/connection.php"); ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <div class="h5 card-title text-center">Create User</div>
                        <form action="" method="post">
                            <div class="form-floating  mb-2">
                                <input type="text" name="userName" id="name" class="form-control" placeholder="Name" autocomplete="off" />
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating  mb-2">
                                <input type="text" name="userPhone" id="phone" class="form-control" placeholder="Phone" autocomplete="off" />
                                <label for="phone">Phone</label>
                            </div>
                            <input type="submit" name="createBTN" class="btn btn-secondary float-end" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

    if(isset($_POST['createBTN'])){
        $name = htmlentities($_POST["userName"]);
        $phone = htmlentities($_POST["userPhone"]);

        // $sql = "INSERT INTO user(name, phone) VALUES('$name', '$phone')";
        // $query = mysqli_query($connection, $sql);
        
        if($name == "" || $name == null || $phone == "" || $phone == null){
            echo "<div class='alert alert-danger'>You need to fill the form.</div>";
        }else {
            // $sql = "INSERT INTO user(name, phone) VALUES('$name', '$phone')";
            // $query = mysqli_query($connection, $sql);
            $sql = "INSERT INTO user(name, phone) VALUES(?, ?)";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param('ss', $name, $phone);
            $stmt->execute();

            if($stmt == true) {
                echo "<div class='alert alert-success'>User Account Created..</div>";
            }else {
                echo "SQL query fail." . mysqli_error();
            }
        }
    }

?>

<?php   include_once("./template/footer.php"); ?>