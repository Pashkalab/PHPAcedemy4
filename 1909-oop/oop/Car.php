<?php

class Car extends Vehicle
{
    public $brand;
    public $model;
    
    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        
        parent::__construct($price);
    }
    
    public function stop()
    {
        if ($this->isMoving()) {
            echo 'Car is not moving!';
        } else {
            $this->state = 'static';
        }
    }
    
    public function __toString()
    {
        return $this->price . ' ' . $this->model;
    }

    public function toArray()
    {
        $a = [$this->brand, $this->model, $this->price];
        return $a;
    }
}