<?php

namespace One;

class Car
{
    public $brand;
    public $model;
    private $price;
    private $state = 'static';

    public function __construct($brand, $model)
    {
        echo 'This is class car 1';
        $this->brand = $brand;
        $this->model = $model;
    }
    
    public function __destruct()
    {
        echo 'destroyed';
    }
    
    public function __toString()
    {
        return $this->brand . ' ' . $this->model;
    }

    // function test()
    // {
    //     var_dump($this);
    // }
    
    public function drive()
    {
        $this->state = 'moving';
        
        $waste = new \Nuclear\Waste();
    }
    
    public function stop()
    {
        if ($this->isMoving()) {
            echo 'You are not moving!';
        } else {
            $this->state = 'static';
        }
    }
    
    public function isMoving()
    {
        return $this->state != 'moving';
    }
    
    public function setPrice($price)
    {
        if (!is_numeric($price)) {
            die('Invalid price');
        }
        
        $this->price = $price;
        
        return $this;
    }
    
    public function getPrice()
    {
        return $this->price;
    }

    public function toArray()
    {
        $a = [$this->brand, $this->model];
        return $a;
    }
}