<?php
// total.php
// functions for totals will go here

class Total{
    public $SEA_TAX = .1025;

    public function __construct(){}

    public function getSub($carray){
    $subTotal = 0.0;
    foreach($carray as $Curry){
        $subTotal += ($Curry->Price * $Curry->Quantity);
    }
    return $subTotal;
    }

    public function getTax($carray){
        $tax = $this->getSub($carray) * $this->SEA_TAX;
        return $tax;
    }

    public function getGrand($carray){
     $grandTotal = $this->getTax($carray) + $this->getSub($carray);
     return $grandTotal;
    }

}