<?php
// total.php
// functions for totals will go here
include "includes/form.php";
class TotalOrder
{
    public function subtotal($myCurries)
    {
        $subtotal = 0.0;
        foreach ($myCurries as $Curry) {
            $subtotal += ($Curry->Price * $Curry->Quantity);
        }
        return $subtotal;
    }

    public function totalWithTax($subtotal)
    {
        $tax = 0.1025;
        $total = $subtotal + ($subtotal * $tax);
        return $total;
    }

}