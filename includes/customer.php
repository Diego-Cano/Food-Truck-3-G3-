<?php
//customer.php 
//include('includes/total.php');

// initialize variables
$customerName = '';
$email = '';
$phone = '';
$total = '';
$spice = '';
$protein = '';
$qty = '';

$nameError = '';
$emailError = '';
$phoneError = '';
$proteinError = '';
$spiceError = '';
$qtyError = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['customer_name'])) {
        $nameError = 'Please provide a name for the order';
    } else {
        $customerName = $_POST['customer_name'];
    }

    if(empty($_POST['email'])) {
        $emailError = 'Please provide your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phoneError = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phoneError = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
        }

// Start Object Error Messages

    if(empty($_POST['spice'])) {
    $spiceError = 'How spicy?';
    } else {
    $spice = $_POST['spice'];
    }

    if(empty($_POST['protein'])) {
    $proteinError = 'Please select a protein';
    } else {
    $protein = $_POST['protein'];  
    }

    if(empty($_POST['qty'])) {
        $proteinError = 'How many?';
        } else {
        $protein = $_POST['qty'];

} // END IF(!EMPTY())

} // END SERVER REQUEST
