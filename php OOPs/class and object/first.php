<?php
class calculation{
public $a, $b,$c;

function sum(){
    $this->c =  $this->a + $this->b;
    return  $this->c ;
}
function sub(){
    $this->c =  $this->a - $this->b;
    return  $this->c ;
}
}
$c1 = new calculation();
$c1->a =20;
$c1->b =20;

$c2 = new calculation();

$c2->a =30;
$c2->b =10;

echo "Sum of the numbers are" .$c1->sum()."\n";
echo "Subtraction of the numbers are" .$c2->sub();

?>