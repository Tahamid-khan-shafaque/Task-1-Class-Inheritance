<?php

require_once 'Shape.php';
require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$circle = new Circle(5);
echo "Circle area : " . $circle->calculateArea() . "\n";

//create a ractangle with width 4 and height 6
$rectangle = new Rectangle(4, 6);
echo "Rectangle area : " . $rectangle->calculateArea() . "\n";
//create a square with side 3
$square = new Square(3);
echo "Square area : " .$square->calculateArea() . "\n"; 

//modify the circle's radius and recalculate the area
$circle->setRadius(7);
echo "Updated circle area : " . $circle->calculateArea() . "\n";


// Modify the rectangle's dimensions and recalculate the area
$rectangle->setWidth(5);
$rectangle->setHeight(8);
echo "Updated rectangle area: " . $rectangle->calculateArea() . "\n";

//modify the sqare's side and recalculate the area
$square->setSide(4);
echo "Updated square area: " . $square->calculateArea() . "\n";