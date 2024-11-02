<?php
interface Shape {
    public function area();
    public function perimeter();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

function calculateArea(Shape $shape) {
    return $shape->area();
}
function calculatePerimeter(Shape $shape){
    return $shape->perimeter();
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 3);

echo "Area of circle: " . calculateArea($circle) . "\n";
echo "Area of rectangle: " . calculateArea($rectangle) . "\n";
echo "Perimeter of rectangle: " . calculatePerimeter($rectangle) . "\n";
echo "Perimeter of rectangle: " . calculatePerimeter($rectangle) . "\n";
?>