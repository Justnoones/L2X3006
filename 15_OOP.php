<?php

// class & object

class Animal{
    // properties // declare variables

    public $name = "black";
    public $color;
    
    // method // functions

    public function animal_name($dog){
        echo "This dog is " . $dog;
    }

    public function animal_color($color){
        echo "This dog has " . $color . " color.";
    }
}

$anung_net = new Animal; // create object // ->
$anung_net->animal_name("Aung Net.");
echo "<br/>";
$anung_net->animal_color("black and white");
echo "<br/>";
echo($anung_net->name) . "<br/>";

$mae_lone = new Animal;
$mae_lone->animal_name("Mae Lone.");
echo "<br/>";
$mae_lone->animal_color("yellow");
echo "<br/>";

class fruits{
    public $name = "apple";
    public $color = "red";

    public function fruit_name($fru_nam){
        $this->name = $fru_nam;  // 
        // echo "The fruit is " . this->name; 
    }

    public function fruit_color($fru_col){
        $this->color = $fru_col;
    }

    public function show_fruit_name(){
        echo "This fruit is " . $this->name;
    }

    public function show_fruit_color(){
        echo "This fruit has " . $this->color;
    }
}

$orange = new fruits;
echo $orange->name . "<br/>"; // apple // default value
$orange->fruit_name("orange.");
echo $orange->name . "<br/>"; // orange // defined value

echo $orange->color . "<br/>"; // red // default value
$orange->fruit_color("orange");
echo $orange->color . "<br/>"; // red // defined value

$orange->show_fruit_name(); // This fruit is orange.
echo "<br/>";
$orange->show_fruit_color(); // This fruit has orange
echo "<br/>";

// Access Modifiers (public, protected, private)
// private {
//     self class -> $this
// }
// protected {
//     self class -> $this
//     child class -> extends
// }
// public {
//     self class -> $this
//     child class -> extends
//     instance
// }
class car{
    public $name; // accessed from everywhere
    protected $color; // accessed within the class and by classes derived from
    private $price; // accessed within class
    static $gender; // can be used directly from origin obj name
    // we have to use double full column to use static staff
    // ::$gender // static::$gender

    public function car_name($car_name){
        $this->name = $car_name;
    }

    public function car_color($car_color){
        $this->color = $car_color;
    }

    public function car_price($car_price){
        $this->price = $car_price;
    }

    public function show_car_color(){
        return $this->color;
    }

    public function show_car_price(){
        return $this->price;
    }

}

$BMW = new Car;
$BMW->car_name("BMW");
$BMW->car_color("Black");
$BMW->car_price("$200000");

echo $BMW->name . "<br/>";
// echo $BMW->color; // error
// echo $BMW->price; // error

echo $BMW->show_car_color() . "<br/>"; // Black
echo $BMW->show_car_price() . "<br/>"; // $200000

// Constructor // __construct
// if you create a construct function, PHP will automatically call this function when creat an object class

class user{
    public $name;
    public $job;

    public function __construct($name1){
        echo "I am " . $name1;
    }

    public function my_name($name2){
        echo "I am " . $name2;
    }
}

$my_profile = new user("Wai Yan."); // construct -> I am Wai Yan.
echo "<br/>";
$my_profile->my_name("Kyaw Kyaw."); // I am Kyaw Kyaw
echo "<br/>";

// Inheritance // extends

class movies{
    public $name;
    public $running_time;

    public function latest_movies($my_movie, $its_time){
        $this->name = $my_movie;
        $this->running_time = $its_time;
    }
}

class my_favorite extends movies{
    public function recent_movie(){
        echo "Movie's name is " . $this->name . " and running time is " . $this->running_time . " minutes.";
    }
}

$my_cenima = new my_favorite;
$my_cenima->latest_movies("Infinity War", 120);
$my_cenima->recent_movie();
echo "<br/>";

class fruit{
    public $name;
    protected $color;
    private $price;

    public function fruit_name($fruit){
        $this->name = $fruit;
    }

    public function fruit_color($fruit){
        $this->color = $fruit;
    }

    public function fruit_price($fruit){
        $this->price = $fruit;
    }

    public function get_color(){
        echo $this->color;
    }

    public function get_price(){
        echo $this->price;
    }
}

class next_fruit extends fruit{
    public function get_color(){
        echo $this->color; // accessed within the class and by classes derived from
    }

    // error // public function get_price(){
    //     echo $this->price; // error because price has private access private access can be used within class and value from inheriented but private can only use within class
    // }
}

$about_fruit = new next_fruit;

$about_fruit->fruit_name("apple"); // name = apple
$about_fruit->fruit_color("red"); // color = red
$about_fruit->fruit_price("$2"); // $price = 2

echo $about_fruit->name . "<br/>";
// echo $about_fruit->color . "<br/>"; // protected error
// echo $about_fruit->price . "<br/>"; // private error
$about_fruit->get_color();
echo "<br/>";
$about_fruit->get_price();
echo "<br/>";


?>