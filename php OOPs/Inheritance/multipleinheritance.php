<?php

class Employee{
    public $name;
    public $age;
    public $salary;

    public function __construct($n, $a, $s)
    {
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    public function info(){
        echo "name". $this->name."<br";
        echo "age". $this->age."<br";
        echo "salary". $this->salary."<br";
    }
}

class Accountant extends Employee{
    public $ta=1000;
    public $phone=200;
    public $totalSalary;

    function info(){
    $this->totalSalary= $this->ta + $this->salary + $this->phone;
    echo " Accountant name :" .$this->name. "<br>";
    echo "Accountant age:" .$this->age. "<br>";
    echo "Accountant salary:" .$this->totalSalary. "<br>";
    }
}

class Manager extends Employee{
    public $ta=2000;
    public $phone=400;
    public $totalSalary;

    function info(){
    $this->totalSalary= $this->ta + $this->salary + $this->phone;
    echo " Manager name :" .$this->name. "<br>";
    echo "Manager age:" .$this->age. "<br>";
    echo "Manager salary:" .$this->totalSalary. "<br>";
    }
}

$emp1 = new Manager("ram", 30, 10000);
$emp2 = new Manager("ramesh", 33, 10011);
$emp3 = new Accountant ("ram", 30, 10000);
$emp4 = new Accountant("ramesh", 30, 10000);


$emp1 -> info();
$emp3 -> info();
$emp2 -> info();
$emp4 -> info();
?>