<?php
interface Shape {
    public function getArea();
}

abstract class AbstractShape implements Shape {
    protected $color;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    // abstract method
    abstract public function getPerimeter();
}

class Rectangle extends AbstractShape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

$rectangle = new Rectangle(10, 20);
$rectangle->setColor('blue');
echo "The area of the " .$rectangle->getColor(). " rectangle is: " . $rectangle->getArea() . "<br>";
echo "The perimeter of the " .$rectangle->getColor(). " rectangle is: " . $rectangle->getPerimeter() . "<br>";
?>
