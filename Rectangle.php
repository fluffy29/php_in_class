<?php
require_once 'Shape.php';
class Rectangle implements Shape{
    private float $width;
    private float $height;
    public function __construct(float $width, float $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function calculatePerimeter(){
        return($this-> height+$this->width)*2;
    }
    public function calculateArea():float
    { return($this-> height*$this->width);

    }
}    