<?php

include "Product.php";

class Digital extends Product
{
    public function __construct($cost, $quantity)
    {
        parent::__construct($cost, $quantity);
    }

    function calculateFinalCost()
    {
        $finalCost = $this->getCost() * $this->getWeightOrQuantity() / 2;
        echo $finalCost;
    }
}
