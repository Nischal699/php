<?php
interface Shape {
    public function area();
}
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
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
}
$cir = new Circle(5);
$rec = new Rectangle(4,6);
echo $cir->area();
echo "<br>";
echo $rec->area();
?>
