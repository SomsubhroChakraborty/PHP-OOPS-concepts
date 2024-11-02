<?php

class employee{
    public $name;
    public $age;
    public $salary;

   public function __construct($name,$age,$salary)
    {
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
        echo "Employee constructor";
    }
   public function info(){
        echo "name:".$this->name."<br>";
        echo "age".$this->age ."<br>";
        echo"salary".$this->salary. "<br>";
    }   
}
class manager extends employee{
    
        public $ta = 1000;
        public $phone = 300;
        public $totalsalary ;
   
     function info(){
       $this->totalsalary = $this->salary + $this->ta + $this->phone;
       echo "Manager name :" .$this->name. "<br>";
       echo "Employee age:" .$this->age. "<br>";
       echo "Manager salary:" .$this->totalsalary. "<br>";
    }   
}
$employee1 = new manager("ram", 20, 1);
$employee1->info();

// $manager1->info();
?>