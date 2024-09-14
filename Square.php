<?php

class Square extends Rectangle{
    public function __construct(float $side){
        parent::__construct($side, $side);
    }
     public function getSide():float{
        return $this->getWidth();
    }

    public function setSide(float $side): void{
        $this->setWidth($side);
        $this->setHeight($side);    
    }
}