<?php
include "includes/customer.php";
include "includes/curry.php";

$subtotal = $myCurry[3];
$tax = $subtotal * .1025;
$total = $subtotal + ($tax);

if (
    !empty($_POST['customer_name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phone'])) {

    echo '<div class="container food-object">
    <h2>Thank you, ' . $customerName . '!</h2>
    <p class="italicize">Contact Info: ' . $email . '<br>' . $phone . '</p>

    <p class="italicize">tax: $' . $tax . '</p>
    <p class="italicize">subtotal: $' . $subtotal . '</p>
    <h2>ORDER TOTAL:<span class="price italicize"> $' . $total . '</h2>
</div>';

} // END IF(!EMPTY())