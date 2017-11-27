<?php

class Vehicle
{
    protected $price;
    public $state = 'static';
    
    public function __construct($price)
    {
        $this->setPrice($price);
    }
    
    public function drive()
    {
        $this->state = 'moving';
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

        $this->price = round($price, 2);

        return $this;
    }
    
    public function getPrice()
    {
        return $this->price;
    }

    public function getFormattedPrice($price){

        return number_format($price,2, ".","");
    }
}