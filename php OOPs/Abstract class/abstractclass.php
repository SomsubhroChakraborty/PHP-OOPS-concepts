<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
    echo"car name is : $this->name";
  }
  abstract public function intro() ;
}

// Child classes
class Audi extends Car {
  public function intro()  {
    echo "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() {
    echo "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro()  {
    echo "French extravagance! I'm a $this->name!";
  }

}
  class Nano extends Car{
    public function intro(){
      echo " Indian car $this->name";
    }

}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

$car = new Nano("tata");
echo $car->intro();
?>