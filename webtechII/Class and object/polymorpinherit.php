<?php
class Animal {
    public function makeSound() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "<br>Meow";
    }
}
$first = new Dog();
$second =new Cat();
$first->makeSound();
$second->makeSound();
?>
