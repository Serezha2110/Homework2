<?php

include "Product.php";

class ByWeight extends Product
{
    public function __construct($cost, $weight)
    {
        parent::__construct($cost, $weight);
    }

    function calculateFinalCost()
    {
        $finalCost = $this->getCost() * $this->getWeightOrQuantity();
        echo $finalCost;
    }
}

$a = new ByWeight(900, 11);
$a->calculateFinalCost();
