<?php
// total.php
// functions for totals will go here

class Total{

    public $Tax = 0.1025;
    

    public function getSubtotal($myCurries) {
        $Subtotal = 0.0;
        foreach($Curries as $Curry){
            $Subtotal += ($Curry->Price * $Curry->Quantity);
        }
        return $Subtotal;
    }

    // public function getSubtotal($Quantity, $Price) {
    //     $Subtotal = $Quantity * $Price;
    //     return $Subtotal;
    // }

    public function totalWithTax($Subtotal) {
     $Total = $Subtotal * $Tax; //or whatever the right # is for tax?
     return $Total;
    }

}