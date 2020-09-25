<?php

include "Product.php";

class Physical extends Product
{
    public function __construct($cost, $quantity)
    {
        parent::__construct($cost, $quantity);
    }

    function calculateFinalCost()
    {
        $finalCost = $this->getCost() * $this->getWeightOrQuantity();
        echo $finalCost;
    }
}

