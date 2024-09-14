<?php

class Rectangle extends Shape{
    private float $width;
    private float $height;
    public function __construct(float $width, float $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float{
        return $this->width * $this->height;
    }

    public function getWidth():float{
        return $this->width;
    }

    public function setWidth(float $width): void{
        $this->width = $width;
    }

    public function getHeight():float{
        return $this->height;
    }

    public function setHeight(float $height): void{
        $this->height = $height;
    }
}