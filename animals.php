<?php
class Animal {
public function eat() {
echo "Animal is eating .<br>";
}
}
class Dog extends Animal {
public function bark() {
echo "Dog is barking .<br>";
}
}
class Cat extends Animal {
    public function meow() {
echo "Cat is meowing .<br>";
    }
}

// Exemple d'utilisation
$animal = new Animal();
$animal->eat(); // Output: Animal is eating
$dog = new Dog();
$dog->eat(); // Output: Animal is eating (héritage de la classe Animal)
$dog->bark(); // Output: Dog is barking

$cat = new Cat();
$cat ->eat();
$cat ->meow();

?>