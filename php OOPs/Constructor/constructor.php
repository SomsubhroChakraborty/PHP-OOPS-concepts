<?php
class Person {
    public $name;
    public $age;
    public $class;

    public function __construct($name="no name", $age="0", $class="not define") {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function introduce() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old."." and class is ". $this->class. "<br>";
    }
}

// Create an object of the Person class
$person1 = new Person("kuntal", 21, 6);
$person2 = new Person("Som", 21,7);
$person3 = new Person();
// Access and modify properties
// $person1->age = 31;
// echo $person1->name ,$person1->age; #
// Call the method
$person1->introduce() ; 
$person2->introduce(); 
$person3->introduce(); 
// Output: Hello, my name is Alice and I am 31 years old.