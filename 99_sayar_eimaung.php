<h1>Home Page</h1>
<?php   $hour = date('h') ?>
<p>
    <?php if($hour < 6 || $hour > 18){
        echo "<i>Day Time</i>";
    }else{
        echo "<b>Night Time</b>";
    }
    ?>

    <?php if($hour < 6 || $hour > 18){ ?>
        <i>Day Time</i>
    <?php } else { ?>
        <b>Night Time</b>
    <?php }?>

    <?php if($hour < 6 || $hour > 18) : ?>
        <i>Day Time</i>
    <?php else : ?>
        <b>Night Time</b>
    <?php endif ?>

</p>

<?php
    $name = "Bob";
    function hello(){
        // $name; // doesn't work undefined
        global $name;
        echo "Hello " . $name; // Hello Bob
        echo "$name is $name has 22\$"; // Bob is Bob has 22$ // double quote knows variable in quote
        echo '$nmae is $name'; // nmae is $name // single quote doesn't know variable in quote
        if(true){
            $nam = "Alice";
        }
        echo $nam; // Alice
    }
    
    hello();

    // this is single line comment
    # this is also single line comment
    /*
    this is multi line comment
    */

    $welcome = "Welcome";
    $welcome .= " ";
    $welcome .= "Bob";

    echo $welcome; // Welcome Bob

    // <> == !=
    echo 3 <=> 5; // -1 // if first value is less than second one return -1
    echo 5 <=> 5; // 0 // if both value are equl return 0
    echo 5 <=> 3; // 1 // if first value is greater than second one return 1

    echo "5" <=> 5; // 0
    echo 5 <=> 5; // 0

    // <=> // use == or !=

    $x = 3;
    $y = 5;

    echo $x === $y || $x === 3; // 1 (true)
    echo $x === $y or $x === 3; // 1 (true)

    echo $x === $y && $x === 3; // (false)
    echo $x === $y and $x === 3; // (false)

    echo !($x === $y and $x === 3); // 1 (true)

    // note that we can use xor as operator in PHP

    $x = 3;
    $y = 5;

    echo $x < $y or $x === 3; // 1 (true)
    echo $x < $y xor $x === 3; // (false)

    $name = "";
    echo $name ? $name : "Unknown"; // Unknown

    $name = "Alice";
    echo $name ? $name : "Unknown"; // Alice

    // we can skip the first argument if we want to output the value of comparison

    $name = "";
    echo $name ?: "Unknown"; // Unknown

    $name = "Alice";
    echo $name ?: "Unknown"; // Alice

    // this error might occur when we haven't define the value first

    echo $name ? $name : "Unknown";
    // Warning: Undefined variable $name

    echo $name ?: "Unknown";
    // Warning: Undefined variable $name

    // we should wite like below to 

    echo isset($name) ? $name : "Unknown"; // Unknown

    echo isset($name) ? $name : "Unknown"; // Unknown

    $result = "Alice";
    $result ??= $name;
    echo $result; // Alice

    $time = date("h");

    if($time > 6 and $time < 18) echo "Day Time";
    else echo "Night Time";

    $time = date("h");
    
    if($time > 6 and $time < 18):
        echo "Day Time";
    else:
        echo "Night Time";
        endif;

    $day = date("D");
    
    // $result = match($day){ // this code will only work in PHP 8
    //     "Sat", "Sun" => "Weekend",
    //     "Fri" => "TGIF",
    //     default => "Weekday"
    //     };

    // echo $result;

    // switch use == // match use ===

    $nums = [12, 42, -2, 8, 621];
    $i = 0;
    $result = 0;
    while($i < count($nums)) {
        $result += $nums[$i];
        $i++;
    }

    echo $result; // 681
    
    $nums = [12, 42, -2, 8, 621];
    $i = 0;
    $result = 0;

    while($i < count($nums)){
        if(0 > $nums[$i]){
            $i++;
            continue;
        }
        $result += $nums[$i];
        $i++;
    }
    echo $result; // 683

    function myFun($a,$b){
        return $a + $b;
    }

    echo myFun(2, 3); // 5
    echo myFun(2, 3, 5); // 5 // don't show error but doesn't work
    // echo myFun(3); // error

    function myFunction($a, $b = 0){
        return $a + $b;
    }

    echo myFunction(2, 3); // 5
    echo myFunction(5); // 5

    function add($a, $b, ...$c){
        return $c;
    }

    print_r(add(2, 3, 4, 5, 6, 7, 8, 9)); // Array ( [0] => 4 [1] => 5 [2] => 6 [3] => 7 [4] => 8 [5] => 9 )

    // function automitically return null

    function asum($a){
        return array_sum($a);
    }

    // echo asum(2, 3); // Error: array_sum(): Argument must be array // real error is at function parameter

    function arsum(Array $a){
        return array_sum($a);
    }
    
    // echo arsum(2, 3); // Argument must be array
                                // define type or the value which is returned in a function
    function addFloat(Array $a) : foat {
        return array_sum($a);
    }

    // addFloat(2, 3); // Return value must be float

    // function price(int|float $n) { this code will only work in PHP 8
    //     return "price is \$$a";
    // }

    // echo price(3.1); // Price is $3.1
    // echo price(2); // Price is $2

    $name = "Alice";

    function namRpl($n) {
        $n = "Bob";
        return "Hello $n";
    }

    echo namRpl($name); // Hello Bob
    echo $name; // Alice

    function nmRl(&$n) {
        $n = "Bob";
        return "Hello $n";
    }

    echo nmRl($name); // Hello Bob // this define $n value into $name
    echo $name; // Bob

    // PHP function use function local variable

    function one() {
        $one = "one";
    }

    // echo $one; // Undefined variable $name

    // function can be invoked by anywhere

    function ichi() {
        function two() {
            echo "Two";
        }
    }

    ichi(); // 
    two(); // Two // this function won't work if we didn't invoke inchi() at first

    $name = "Alice";

    function nam() { 
        // echo "Hello $name";
    }

    nam(); // Warning: Undefined variable $name

    // if we want to use the variable that defined at global variable in function we must redeclare in function : global $variable name

    $pete = "Peter";

    function peter() {
        global $pete;
        echo "Hello $pete";
    }

    peter(); // Hello Peter

    $name = "Alice";

    function mello() {
        global $name;
        $name = "Bob";
    }

    echo $name; // Alice
    mello();
    echo $name; // Bob

    function waiyan($name) {
        echo "$name Sor Ma Shi.";
    }

    $greet = "waiyan"; // this mean // waiyan
    $greet("Wai Yan"); // Wai Yan Sor Ma Shi. // so // $greet() === waiyan()

    $numbers = [1, 2, 3, 4];

    function eiei($n) {
        return $n * 2;
    }

    $result = array_map("eiei", $numbers);

    print_r($result); // Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )

    // array_map(callback,array parameter);

    $Numbers = [1, 2, 3, 4];

    $result = array_map(function($n) {
        return $n * 2;
    }, $Numbers);

    print_r($result); // Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )

    $anno = function($n) {
        echo $n * 2;
    };

    $anno(2); // 4

    $name = "Alice";
    $hello = function() use($name) {
        return "Hello $name";
    };
    echo $hello(); // Hello Alice

    $name = "Alice";
    $hello = function() use($name) {
        $name = "Bob";
        return "Hello $name";
    };
    echo $hello(); // Hello Bob
    echo $name; // Alice

    // Arrow Function

    $two = fn ($n) => $n * 2; // 
    echo $two(2); // 4

    // Arrow Function can use global variable directly

    $y = 5;
    $two = fn ($x) => $y + $x;
    echo $two(3); // 8

    function profile($name, $email, $age) {
        return "$name ($age) @ $email";
    }
    echo profile("Mg Mg","mg@gmail.com",16); // Mg Mg (16) @ mg@gmail.com

    function profiles($name, $email, $age) {
        echo "$name ($age) @ $email";
    };

    // profiles(age: 23, name: "Bob", email: "bob@gmail.com"); // This code will only work in PHP 8
    // profile(
    //     age: 23,
    //     name: "Bob",
    //     email: "bob@gmail.com",
    // ); // This will only work in PHP 8
       
    // Bob (23) @ bob@gmail.com

    class anim {
        public function __construct() {
            echo "This animal is runnging";
        }
    }

    $anim = new anim; // Thid animal is running. // note that constructor function is returned just after we declare variable for class

    class Animal {

        // Access Modifiers
        // public // fully accessed to use after variable
        // private // can be used only between original class
        // protected // can be used between class and inheritance class
        // static // stand alone


        public $name;
        private $age;
        protected $gender;
        static $favourite = "Beef";

        public function __construct($Name, $Age, $Gender) {
            $this->name = $Name;
            $this->age = $Age;
            $this->gender = $Gender;
        }

        public function run(){
            echo "$this->name is running...";
        }

        public function dogAge() {
            echo "$this->name is $this->age years old.";
        }

        public function dogGender() {
            echo "$this->name is $this->gender";
        }

        static function favouriteFood() {
            echo "This's dog favourite food is " . static::$favourite;
        }
    }

    $dog = new Animal("Bobby",3,"Male","Beef");

    $dog->run(); // Bobby is running...
    $dog->dogAge(); // Bobby is 3 years old.
    $dog->dogGender(); // Bobby is Male
    Animal::favouriteFood(); // This's dog favourite food is Beef

    // class Animal {
    //     public function __construct(private $name) { // this code will only work in PHP 8
    //         //
    //     }
    // public function run() {
    //     echo "$this->name is running...";
    //     }
    // }
    // $dog = new Animal("Rambo");
    // $dog->run(); // Rambo is running... //  this code will only work in PHP 8

    // we can also use final keyword here
    // this won't allow the other class to extend anymore from Cat class
    final class Cat extends Animal {
        // override the parent class
        // to provide it we can add the final keyword at the parent class : final public function
        public function __construct($name, $age, $gender, $color) {
            parent::__construct($name, $age, $gender);
            $this->color = $color;
        }
    }

    $cat = new Cat("Ei Si",2,"Female","Yellow & White");

    $cat->run(); // Ei Si is running...
    $cat->dogAge(); // Ei Si is 2 years old.
    $cat->dogGender(); // Ei Si is Female

    // class Mouse extends Cat {
        //  Error: may not inherit from final class
    // }

    abstract class People {
        public abstract function talk();
        public function running() {
            echo "Running...";
        }
    }

    // abstract keyword define what the ineritened class must do else eroor occur

    // class Man extends People {
        // Error: abstract method must be declared or implement the remaining
    // }

    class Men extends People {
        public function talk () {
            echo "Talking";
        }
    }

    class Dog {
        public function run() {
            echo "This dog is running.";
        }
    }

    class Fish {
        public function swim() {
            echo "This fish is swimming.";
        }
    }

    function app(Dog $obj) {
        $obj -> run();
    }

    app(new Dog); // This dog is running.
    // app(new Fish); // Error: Argument must be Dog

    interface Movie {
        public function runTime();
    }

    class CivilWar implements Movie {
        public $name;
        public $time;

        public function __construct($name, $time) {
            $this->name = $name;
            $this->time = $time;
        }

        public function runTime() {
            echo "$this->name movie is $this->time long.";
        }
    }

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

    // class InfinityWar implements Movie {
        // Class InfinityWar contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Movie::runTime)
    // }

    // class EndGame implements Movie {
        // error because this class must contain runTime() function
    // }

    $civil_war = new CivilWar("Civil War","148 minutes");
    $civil_war->runTime(); // Civil War movie is 148 minutes long.

    interface Fruit {
        public function seed();
    }

    interface Meat {
        public function bone();
    }

    // implements can contain multiple interface unlike inheritance

    class Food implements Fruit, Meat {
        public function seed() {
            "This food contan seed.";
        }
        public function bone() {
            "This food contain bone.";
        }
    }

    trait Name {
        public function name($name) {
            echo "Hello I'm $name.";
        }
    }

    trait Age {
        public function age($age) {
            echo "Hello I'm $age years old.";
        }
    }

    // similar to extends but can be inherients multiplie class

    class Person {
        use Name, Age;
    }

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

    $person = new Person;

    $person->name("Wai Yan Ye Yint"); // Hello I'm 17 years old.
    $person->age(17); // Hello I'm 17 years old.

    // const are static member
    // const can't be declate between trait

    class ExConst {
        const PI = 3.14;
    }

    echo ExConst::PI; // 3.14

    // Magic Methods

    // call() -> this will work when we call the undefined Method
    // callStatic() -> this will work when we call the undefined static Method

    class Math {
        public function __call($name, $args) {
            echo "Method $name doesn't exists.";
        }
        static function __callStatic($name, $args) {
            echo "Static method $name doesn't exists.";
        }
    }

    $math = new Math;

    $math->name(); // Method name doesn't exists. // doesn't occur error
    $math::name(); // Static method name doesn't exists. // doesn't occur error

    // invoke() -> this will work when we try to run obj as function
    
    class English {
        public function __invoke() {
            echo "This is not a function.";
        }
    }

    $english = new English;
    $english(); // This is not a function. // doesn't occur error
    
    // set() -> this will work when we try to set the private, protected value from disabled place
    // set() -> this will work when we try to set the private, protected value from disabled place

    // class History {
    //     private $rate = 10;
    //     public function __get($name) {
    //         echo "Can't get $name";
    //     }
    //     public function __set($name,$value) {
    //         echo "Can't set $name with $value";
    //     }
    // }

    // $history = new History;
    // echo $history->$rate;
    // $history->$rate = 0;

    class history {
        private $PI = 3.14;
        public function __get($name) {
            echo "Cannot get $name";
        }
        public function __set($name, $value) {
            echo "Cannot set $name with $value";
        }
    }

    $obj = new history;
    echo $obj->PI; // Cannot access PI
    $obj->PI = 3.142; // Cannot set PI with 3.142

    // toString() -> this will work when we try to use object as string

    class Bio {
        private $PI = 3.14;
        public function __toString() {
            return "PI = $this->PI" . " This is object cann't be used with echo.";
        }
    }

    $bio = new Bio;
    echo $bio; // PI = 3.14 This is object cann't be used with echo.

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

    // declare(strict_types=1); this must be declared as the vers first statement

    // 1. E_PARSE
    // 2. E_ERROR
    // 3. E_WARNING
    // 4. E_NOTICE
    // 5. E_STRICT
    // 6. E_DEPRECATED
    // 7. E_ALL


    function plus(int $a, int $b) {
        echo $a + $b;
    }
    
    plus(2,"3"); // 5 // this is without declare
    // plus(2,"5") // this is with declare // Error: Argument #2 ($b) must be of type int, string given

    function addd($nums) {
        if(! is_array($nums)){
            throw new Exception("Argument must be array");
        }
        return array_sum($nums);
    }

    // echo addd(1); // Error: Uncaught Exception: Argument must be array

    try{
        echo addd(1);
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "Done";
    } // Argument must be array Done

    try{
        echo addd([1,2]);
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "Done";
    } // 3 Done
    echo 2 > 1;
    echo "testing" . 1+2 . "45";

    $x = 10;
    $y = 5;
    $x /= $y;
    echo $x;

    define("HELLO","HELLO WORLD.");
    echo HELLO;
    // define("HELLO","HELLO MELLO");
    // echo HELLO;
    $numbers = [50, 20, 10, 40];
    $numbers[1] = 30; 
    var_dump($numbers);

    $even = false;

    if ($even = true) {
    
    echo "it is even number";
    
    };

    $income = 4001;

    if($income > 3000) {
        echo "Income is greater than 3000";
    } elseif($income > 4000) {
        echo "Income is greater than 4000";
    }

    $ch = "F";
    if($ch >= "A" && $ch <= "Z") {
        echo $ch;
    }

?>