<?php
namespace Food;

class Fruit {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

namespace Food;

class Vegetable {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

use Food\Fruit;
use Food\Vegetable;

$apple = new Fruit('Apple');
$carrot = new Vegetable('Carrot');


echo "Fruit: " . $apple->getName() . "\n";
echo "Vegetable: " . $carrot->getName() . "\n";

?>