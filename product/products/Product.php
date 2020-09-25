<?php

abstract class Product
{
    protected $cost;
    protected $weightOrQuantity;

    public function getCost()
    {
        return $this->cost;
    }

    public function getWeightOrQuantity()
    {
        return $this->weightOrQuantity;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function setWeightOrQuantity($weightOrQuantity)
    {
        $this->weightOrQuantity = $weightOrQuantity;
    }

    function __construct($cost, $weightOrQuantity){
        $this->cost = $cost;
        $this->weightOrQuantity = $weightOrQuantity;
    }

    abstract function calculateFinalCost();
}