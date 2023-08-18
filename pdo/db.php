<?php

    class DB {

        public $pdo;

        public function __construct() {
            try{
                $this->pdo = new PDO("mysql:dbname=school;host=localhost", "root" , "");
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PODException $e) {
                die($e->getMessage());
            } catch(Exception $e) {
                die($e->getMessage()); 
            }
        }

        public function index() {
            $statement = $this->pdo->query("SELECT * FROM students");
            if ($statement) {
                $students = $statement->fetchAll(PDO::FETCH_OBJ);
                return $students;
            }
        }

        public function store($data) {
            $sql = "
            INSERT INTO `students` (`name`, `email`, `password`, `gender`, `age`, `date_of_birth`) VALUES
            (:name, :email, :password, :gender, :age, :date_of_birth)
            ";
            $statement = $this->pdo->prepare($sql);
            $statement->bindParam(":name", $data["name"]);
            $statement->bindParam(":email", $data["email"]);
            $statement->bindParam(":password", $data["password"]);
            $statement->bindParam(":gender", $data["gender"]);
            $statement->bindParam(":age", $data["age"]);
            $statement->bindParam(":date_of_birth", $data["date_of_birth"]);
            if ($statement->execute()) {
                header("location: ./show.php?id={$this->pdo->lastInsertId()}");
            }
        }

        public function show($id) {
            $sql = "SELECT * FROM students WHERE `id` = :id";
            $statement = $this->pdo->prepare($sql);
            $statement->bindParam(":id", $id["id"]);
            if ($statement->execute()) {
                $student = $statement->fetch(PDO::FETCH_OBJ);
                return $student;
            }
        }

        public function update($method) {
            $sql = "
            UPDATE `students`
            SET `name` = :name, `email` = :email, `password` = :password , `gender` = :gender, `age` = :age, `date_of_birth` = :date_of_birth
            WHERE `id` = :id
            ";
            $statement = $this->pdo->prepare($sql);
            $statement->bindParam(":id", $method["id"]);
            $statement->bindParam(":name", $method["name"]);
            $statement->bindParam(":email", $method["email"]);
            $statement->bindParam(":password", $method["password"]);
            $statement->bindParam(":gender", $method["gender"]);
            $statement->bindParam(":age", $method["age"]);
            $statement->bindParam(":date_of_birth", $method["date_of_birth"]);
            if ($statement->execute()) {
                header("location: ./show.php?id={$method['id']}");
            }
        }

        public function destory($id) {
            $statement = $this->pdo->prepare("DELETE FROM `students` WHERE `id` = :id");
            $statement->bindParam(":id", $id);
            if ($statement->execute()) {
                header("location: ./index.php");
            }
        }
    }

?>