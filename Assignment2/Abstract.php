<?php
//Abstraction is a fundamental principle of object-oriented programming (OOP) that focuses on presenting only the essential characteristics annd behavior of an object while hiding the implementation details. It allows developers to create abstract classes or interfaces that define a blueprint for subclasses, without providing the full implementation of methods. Abstract classes serves as a foundation for related classes, providing a common interface that must be implemented by their subclasses.
//Example 1: Vehicle Abstract Class
abstract class Animal {
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function makeSound();
    public function getName(){
        return $this->name;
}
}
class Dog extends Animal {
    public function makeSound(){
        return "Woof Woof";
    }
}

class Cat extends Animal {
    public function makeSound(){
        return "Meow";
    }
}
$dog = new Dog("Buddy");
echo $dog->getName() . "say:" . $dog->makesound() . "\n";

$cat = new cat("Whisker");
echo $cat->getName() . "say:" . $cat->makesound() . "\n";



//Example 2
abstract class Fruit {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function getColor();

    public function getName() {
        return $this->name;
    }
}

class Apple extends Fruit {
    public function getColor() {
        return "Red";
    }
}

class Banana extends Fruit {
    public function getColor() {
        return "Yellow";
    }
}


$apple = new Apple("Apple");
echo $apple->getName() . " is " . $apple->getColor() . "\n";

$banana = new Banana("Banana");
echo $banana->getName() . " is " . $banana->getColor() . "\n";

?>