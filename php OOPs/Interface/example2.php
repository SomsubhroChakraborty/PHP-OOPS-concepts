<?php
interface Employee {
    public function salary();
    public function bonus();
}

class Developer implements Employee {
    private $basic;
    private $incentive;

    public function __construct($basic, $incentive) {
        $this->basic = $basic;
        $this->incentive = $incentive;
    }

    public function salary() {
        return $this->basic;
    }

    public function bonus() {
        return $this->incentive;
    }
}

class Manager implements Employee {
    private $basic;
    private $incentive;

    public function __construct($basic, $incentive) {
        $this->basic = $basic;
        $this->incentive = $incentive;
    }

    public function salary() {
        return $this->basic +  $this->incentive;
    }

    public function bonus() {
        return $this->incentive;
    }
}


$M1 = new Manager(20000,200);
 echo $M1->salary();
 echo $M1->Bonus();
?>