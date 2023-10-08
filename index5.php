<?php

/*Data Types 
    * 1. String
    * 2. Integer
    * 3. Float
    * 4. Boolean
    * 5. Array
    * 6. Object
    * 7. NULL
    * 8. Resource

*/

/*variables */
$txt1 = "Learn Php";
$txt2 = "UMG SANARATE";
$x = 10.90; //float
$y = true;
$z = false; //boolean
$cars = array("Toyoya", "HONDA", "MAZDA"); //array


echo $txt1;
echo "<br>";
var_dump($cars);

echo "<br>";
echo "=================================================";
echo "<br>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

/**variable mycar */
$myCar = new Car("black", "Toyota");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Volvo");
echo $myCar->message();
?>
