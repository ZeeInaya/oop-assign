<?php
class Fruit {
    private $name;
    private $color;


    public function set_name($fruit_name) {
        $this->name = $fruit_name;
    }


    public function get_name() {
        return $this->name;
    }
  
    public function set_color($fruit_color) {
        $this->color = $fruit_color;
    }

    public function get_color() {
        return $this->color;
    }
}

//instantiate the Fruit class with four different fruit names
$fruit1 = new Fruit();
$fruit1->set_name('Apple');

$fruit2 = new Fruit();
$fruit2->set_name('Banana');

$fruit3 = new Fruit();
$fruit3->set_name('Pineapple');

$fruit4 = new Fruit();
$fruit4->set_name('Strawberry');

//Output of the names of the fruits
echo "Fruit 1: " . $fruit1->get_name() . "\n";
echo "Fruit 2: " . $fruit2->get_name() . "\n";
echo "Fruit 3: " . $fruit4->get_name() . "\n";
echo "Fruit 4: " . $fruit4->get_name() . "\n";

?>


