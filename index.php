<?php
// index.php
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
      <h2 class="red-text center">About Us</h2>
          <p class="italicize">Kyrrah's Curry Cart is Seattle's oldest, continuously operated food truck! Serving up spice n' sass&trade; since 1993,
              we've continued to be your neighborhood go-to for all things curry. 
          </p>
</div><!--end container about-->

<?php include('includes/form.php'); ?>

<!-- this div will only display when all required form fields are filled out and order is complete-->

<?php 
//variables for output
//echo statements may be used or deleted or commented out later...helpful for testing

// echo is_countable($_POST['1_sides']);
// echo is_countable($_POST['2_sides']);
// echo is_countable($_POST['3_sides']);
// var_dump($_POST['3_sides']);
// var_dump(is_countable([1, 2, 3])); // bool(true)
// var_dump(is_countable($_POST['3_sides'])); // bool(true)
// var_dump(is_countable($_POST['1_sides'])); // bool(true)
// var_dump(is_countable($_POST['2_sides'])); // bool(true)
// attempting to make extras a foreach loop:
// $extras = 0;
// foreach($myCurry as $Curry){
//     if($Curry->Quantity > 0){
//     $extras += count($_POST[$Curry->Name.'_sides']);
// }
// }
// echo 'extras: '.$extras;
// echo '<br>';
// echo 'other stuff';

// counting and totaling extras, echo statements for testing
$thaiExtras = count($_POST['1_sides']);
// echo $thaiExtras;
// echo '<br>';
$indiaExtras = count($_POST['2_sides']);
// echo $indiaExtras;
// echo '<br>';
$japanExtras = count($_POST['3_sides']);
// echo $japanExtras;
// echo '<br>';
$jamaicanExtras = count($_POST['4_sides']);
$totalExtras = $thaiExtras + $indiaExtras + $japanExtras + $jamaicanExtras;
// echo 'extras'.$totalExtras;
// echo '<br>';
$priceExtras = $totalExtras * 3.99;
// echo 'extra price'.$priceExtras;
// echo '<br>';
// iterating through $myCurry array to create subtotals from qty and price properties (this can be a function if anybody has time)
$orderSub = 0;
foreach($myCurry as $Curry){
    if($Curry->Quantity > 0){
    $orderSub += $Curry->Quantity * $Curry->Price;
}
}
// total formulas
$subTotal = number_format(($orderSub + $priceExtras),2);
$SEA_TAX = .1025;
$taxTotal = number_format(($SEA_TAX * $orderSub),2);
$total = number_format(($subTotal + $taxTotal),2);

// order summary
if (
    !empty($_POST['customer_name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phone'])) {
    echo '<div class="container food-object">
    <h2>Thank you, ' . $customerName . '!</h2>
    <p class="italicize">Contact Info: ' . $email . '<br>' . $phone . '</p>
    <p class="italicize">Your order:';
    foreach($myCurry as $Curry){ // begin itemized
            if($Curry->Quantity > 0){
                $summary .= '<p class="italicize">'.$Curry->Quantity.' '.$Curry->Name.' @ $'.$Curry->Price.'</p>';
            }
        
        } 
        echo $summary;//end itemized
    echo '
    <p class="italicize">'. $totalExtras . ' side(s) rice @ 3.99</p> 
    <p class="italicize">Subtotal: $' . $subTotal . '</p>
    <p class="italicize">Seattle Tax: $' . $taxTotal . '</p>
    <h2>ORDER TOTAL:<span class="price italicize"> $' . $total . '</h2>
</div>'

;

} // END IF(!EMPTY())
// end summary
?>

</div><!--end content wrap-->
</div> <!--WRAPPER-->
<footer>
<ul class="bottom-links">
    <li>Copyright &copy; 1993-<?php echo date("Y");?></li>
    <li>Diego</li>
    <li>Ellen</li>
    <li>Brink</li>
    <li>Devvy</li>
    <li>KC</li>
    <li><small><a id="html-checker" href="#">HTML&nbsp;Validation</a>&nbsp;~&nbsp;<a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS&nbsp;Validation</a></small></li>
</ul>

<hr>
    
<ul class="social">
    <li><a href ="https://en.wikipedia.org/wiki/Curry"><i class="fas fa-envelope-square"></i></a></li>
    <li><a href ="https://en.wikipedia.org/wiki/Curry"><i class="fab fa-instagram-square"></i></a></li>
    <li><a href ="https://en.wikipedia.org/wiki/Curry"><i class="fab fa-facebook-square"></i></a></li>
</ul>
</footer>


<script>document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href); </script>
</body>
</html>