<?php
//customer.php
//include('includes/total.php');

// initialize variables
$customerName = '';
$email = '';
$phone = '';
$total = '';

$nameError = '';
$emailError = '';
$phoneError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['customer_name'])) {
        $nameError = 'Please provide a name for the order';
    } else {
        $customerName = $_POST['customer_name'];
    }

    if (empty($_POST['email'])) {
        $emailError = 'Please provide your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) { // if empty, type in your number
        $phoneError = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phoneError = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        }
    }

} // END SERVER REQUEST