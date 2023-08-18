<?php

    $data = [10, 20, 30];

    function mapper ($items, $fun) {

        $result = [];

        foreach($items as $item){
            $result[] = $fun($item);
        }

        return $result;
    }

    $result = mapper($data, function($item){
        return $item * 5;
    });

    $result_1 = mapper($data, function($item){
        return $item * 3 / 2;
    });

    var_dump($result, $result_1);

    array_map(function($item){
        echo $item * 5;
    }, $data);

    echo "<br/>";

    function test_map($fun, $items) {
        $idk = [];
        foreach($items as $item) {
            $idk[] = $fun($item);
        }
        return $idk;
    }

    test_map(function($item){
        echo $item * 5 . "<br/>";
    }, $data);

    echo "<br/>";

    class Animal {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function eat() {
            echo "$this->name is eating.";
        }
        public static function sleep($name) {
            echo "$name is sleeping.";
        }
    }

    $cat = new Animal("Cat");
    $cat->eat();
    echo "<br/>";
    Animal::sleep("Cat");
    echo "<br/>";

    class Student {
        private $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
    }

    $student = new Student("Jhon Doe");
    echo $student->getName(); // Jhon Doe
    $student->setName("Mery");
    echo $student->getName(); // Mery
    echo "<br/>";

    interface promotion {
        public function send();
    }

    class Ooredoo implements promotion {
        public function send () {
            echo "SMS Send From Ooredoo.";
        }
    }
    
    class Telenor implements promotion {
        public function send () {
            echo "SMS Send From Telenor.";
        }
    }

    class Send {
        public function send ($provider) {
            $provider->send();
        }
    }

    $send = new Send;
    $send->send(new Ooredoo); // SMS Send From Ooredoo
    $send->send(new Telenor); // SMS Send From Telenor

    // composition

    class Wai {
        public function eat() {
            echo "Wai is eating.";
        }
    }

    class Yan {
        public function work() {
            echo "Yan is working.";
        }
    }

    class Ye {
        public function study() {
            echo "Ye is studying.";
        }
    }

    class Yint {
        public function sleep() {
            echo "Ying is sleeping.";
        }
    }

    class WaiYanYeYint {
        public $wai;
        public $yan;
        public $ye;
        public $yint;
        public function __construct(){
            $this->wai = new Wai;
            $this->yan = new Yan;
            $this->ye = new Ye;
            $this->yint = new Yint;
        }
        public function info() {
            $this->wai->eat();
            $this->yan->work();
            $this->ye->study();
            $this->yint->sleep();
        }
    }

    $waiyanyeyint = new WaiYanYeYint;

    $waiyanyeyint->info(); // Wai is eating.Yan is working.Ye is studying. Ying is sleeping.

    // method changeing & fluent interface

    class Jhon {
        public function printName() {
            echo "Jhon Doe.";
            return $this;
        }
        public function printAge() {
            echo 17;
            return $this;
        }
        public function printGender() {
            echo "Male";
            return $this;
        }
    }

    $jhon = new Jhon;
    
    $jhon->printName()->printAge()->printGender(); // Jhon Doe.17Male

    // Array of Object

    class Peoples {
        public $name;
        public $age;
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        public function printInfo() {
            return "<p>{$this->name} - {$this->age}</p>";
        }
    }

    $students = [
        new Peoples("Jhon", 20),
        new Peoples("Mery", 25),
        new Peoples("Peter", 17)
    ];

    foreach($students as $student) {
        echo $student->printInfo(); // Jhon - 20 Mery - 25 Peter - 17
    }

    var_dump((int)'60'); // int(60)
    var_dump('60'); // string(2) "60"

?>

