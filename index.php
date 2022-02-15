<?php
include('includes/customer.php');
include('includes/total.php');
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

<title>Kyrrah's Curry Cart</title>
</head>

<body>
<div class="wrapper">
    <header></header>     

<div class="hero">
    <div class="hero-text">
        <h1 class="headline">Kyrrah's Curry Cart</h1>
    </div>   
</div><!--HERO-->

<div class="content-wrap">
<div class="container about">
      <h2 class="red-text center">About Us<h2>
          <p class="italicize">Kyrrah's Curry Cart is Seattle's oldest, continuously operated food truck! Serving up spice n' sass&trade; since 1993,
              we've continued to be your neighborhood go-to for all things curry. 
          </p>
</div><!--end container about-->

<?php include('includes/form.php'); ?>

<!-- this div will only display when all required form fields are filled out and order is complete-->

<?php //echo '<div class="center total"> Your total is: '.$total//->subTotal($myCurries).'</div>'; <!--REPEATS ORDER TOTAL?-->



// $subTotal = $myCurry[3];
// $tax = $subTotal * .1025;            <---- ECHOING CONTENTS OF SUMMARY.PHP ---->
// $total = $subTotal + ($tax);
 

//variables for output
//echo statements may be used or deleted or commented out later...helpful for testing

$orderSub = number_format((($_POST['1'] * 12.95) + ($_POST['2'] *  13.95) + ($_POST['3'] * 10.95)),2);
$SEA_TAX = .1025;
$taxTotal = number_format(($SEA_TAX * $orderSub),2);
$total = number_format(($orderSub + $taxTotal),2);


if (
    !empty($_POST['customer_name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phone'])) {
    echo '<div class="container food-object">
    <h2>Thank you, ' . $customerName . '!</h2>
    <p class="italicize">Contact Info: ' . $email . '<br>' . $phone . '</p>
    <p class="italicize">Your order:';
    foreach($myCurry as $Curry){
            if($Curry->Quantity > 0){
                $summary = '<p class="italicize">'.$Curry->Quantity.' '.$Curry->Name.' @ $'.$Curry->Price.' </p>';
            }
        echo $summary;
        } //end summary
    echo ' 
    <p class="italicize">Subtotal: $' . $orderSub . '</p>
    <p class="italicize">Seattle Tax: $' . $taxTotal . '</p>
    <h2>ORDER TOTAL:<span class="price italicize"> $' . $total . '</h2>
</div>'

;

} // END IF(!EMPTY())
?>

</div><!--end content wrap-->
</div> <!--WRAPPER-->
<footer>
<ul class="bottom-links">
    <li>Copyright &copy; 1993-<?php echo date("Y");?></li>
    <li>Diego</li>
    <li>Ellen</li>
    <li>Brink</li>
    <li>Darrian</li>
    <li>KC</li>
    <li><small><a id="html-checker" href="#">HTML&nbsp;Validation</a>&nbsp;~&nbsp;<a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS&nbsp;Validation</a></small></li>
</ul>

<hr>
    
<ul class="social">
    <li><a href ="https://en.wikipedia.org/wiki/Curry"><i class="fas fa-envelope-square"></i></li>
    <li><a href ="https://en.wikipedia.org/wiki/Curry"><i class="fab fa-instagram-square"></i></a></li>
    <li><a href ="https://en.wikipedia.org/wiki/Curry"><i class="fab fa-facebook-square"></i></li>
</ul>
</footer>


<script>document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href); </script>
</body>
</html>