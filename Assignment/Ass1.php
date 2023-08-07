<?php
// Fundamental Programming
$a = 10;
$b = 15;
$result = $a + $b;
echo "Fundamental Programming: $result"; //Output:25




// Procedural Programming
function addNumbers($a, $b){
    return $a + $b;
}

$a = 10;
$b = 15;
$result = addNumbers($a, $b);
echo "Procedural Programming: $result"; // Output: 25



//Object-Oriented Programming (OOP)
class Car{
    public $make;
    public $mode1;
    public $year;

    public function __construct($make, $mode1, $year) {
        $this->make = $make;
        $this->mode1 = $mode1;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Make: " . $this->make . "\n";
        echo "Mode1: " . $this->mode1 . "\n";
        echo "Year: " . $this->year . "\n";
    }
}
// Creating an object of the Car class
    $car1 = new Car("Toyota", "Camry", 2022);

    //Display information about the car
    $car1->displayInfo();
    
?>