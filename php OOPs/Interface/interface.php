<?php
interface Animal{
    public function makeSound();
}

class Dog implements Animal{
    public function makeSound() {
        echo " Bark";
      }
}
class Cat implements Animal{
    public function makeSound() {
        echo " Mew";
      }
}

$cat=new Cat();
$cat->makeSound();

$dog=new Dog();
$dog->makeSound();
$animal= new Animal();
$animal->makeSound()

?>
