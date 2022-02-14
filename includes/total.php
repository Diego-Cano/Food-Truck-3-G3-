<?php
// total.php
// functions for totals will go here

class TotalOrder{
    public function subtotal($myCurries) {
    $subtotal = 0.0;
    foreach($myCurries as $Curry){
        $subtotal += ($Curry->Price * $Curry->Quantity);
    }
    return $subtotal;
    }

    public function totalWithTax($subtotal) {
     $tax = 0.1025;
     $total = $subtotal * $tax;
     return $total;
    }

}