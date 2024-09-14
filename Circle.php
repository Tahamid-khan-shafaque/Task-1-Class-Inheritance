<?php

class Circle extends Shape{
    private float $radius;
    public function __construct (float $radius){
        $this->radius = $radius;
    }

    public function calculateArea():float{
        return pi()*pow($this->radius,2);
    }

    public function getRadius():float{
        return $this->radius;
    }

    public function setRadius(float $radius): void{
        $this->radius = $radius;
    }
}