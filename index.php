<?php
// initialize variables
$customerName = '';
$email = '';
$phone = '';
$total = '';


$nameError = '';
$emailError = '';
$phoneError = '';



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


if(!empty($_POST['customer_name']) && 
!empty($_POST['email']) && 
!empty($_POST['phone'])) {

    $total =  '<div class="total">
                <h2>Thank you, ' . $customerName . '!</h2>
    <p class="italicize">Contact Info:' . $email . '<br>' . $phone . '</p>
        <dl>
            <dt></dt>
                <dd></dd>
            <dt></dt>
                <dd></dd>
             <dt></dt>
                <dd></dd>
        </dl>
    <p class="italicize">tax</p>
    <p class="italicize">subtotal</p>
    <h2>ORDER TOTAL:<span class="price italicize"> $price will go here</span></h2>
    </div>';

} // END IF(!EMPTY())

} // END SERVER REQUEST


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta value="viewport" content="width=device-width, initial-scale=1.0" >
<script src="https://kit.fontawesome.com/236cdfe8ce.js" crossorigin="anonymous"></script>
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Libre+Baskerville&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">

<title>Curry Cart</title>
</head>

<body>
<div class="wrapper">
    <header></header>     

<div class="hero">
    <div class="hero-text">
        <h1 class="headline">Kyrrah's Curry Cart</h1>
    </div>   
</div><!--HERO-->

<div class="flex-wrap">
                <div class="flex-container left">
            
            <?php include('includes/form.php'); ?>

                </div><!--end flex-container left-->
      
      <div class="flex-container right">
      <div class="container about">
      <h2 class="red-text center">About Us<h2>
          <p class="italicize">Kyrrah's Curry Cart is Seattle's oldest, continuously operated food truck! Serving up spice n' sass&trade; since 1993,
              we've continued to be your neighborhood go-to for all things curry. 
          </p>
              </div><!--end about-->

              <!-- this div will only display when all required form fields
              are filled out and order is complete-->
<div class="center"> 
       <?php echo $total?>
</div>     


                </div><!--end flex-container right-->
</div><!--flex-wrap-->

           

</div> <!--WRAPPER-->
</body>
</html>