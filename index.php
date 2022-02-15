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
$thaiQty = $_POST['Thai_Curry_qty'];
$thaiExtras = count($_POST['Thai_Curry_sides']);
$thaiPrice = 12.95;
$thaiSpice = $_POST['Thai_Curry_spice'];
$thaiProtein = $_POST['Thai_Curry_protein'];
$thaiSub = ($thaiPrice * $thaiQty);
echo $thaiQty. ' Thai curries @ $' . $thaiPrice;
echo  '<br>';
echo $thaiSpice .' spice with '. $thaiProtein;
echo  '<br>';

$indiaQty = $_POST['Indian_Curry_qty'];
$indiaExtras = count($_POST['Indian_Curry_sides']);
$indiaPrice = 13.95;
$indiaSub = ($indiaPrice * $indiaQty);

echo $indiaQty.' Indian curries @ $'. $indiaPrice;
echo  '<br>';

$japanQty = $_POST['Japanese_Curry_qty'];
$japanExtras = count($_POST['Japanese_Curry_sides']);
$japanPrice = 10.95;
$japanSub = ($japanPrice * $japanQty);
echo $japanQty.' Japanese curries @ $'. $japanPrice;
echo  '<br>';

$extraPrice = 3.99;
$totalExtras = $thaiExtras + $indiaExtras + $japanExtras;
$extraSub = $totalExtras * $extraPrice;
echo $totalExtras .' sides rice @ $'.$extraPrice;
echo  '<br>';
$subTotal = number_format(($thaiSub + $indiaSub + $japanSub + $extraSub),2);
echo 'subTotal: $'.$subTotal;
echo  '<br>';
$SEA_TAX = .1025;
$taxTotal = number_format(($SEA_TAX * $subTotal),2);
$total = number_format(($subTotal + $taxTotal),2);
echo 'Seattle Tax: $'.$taxTotal;
echo  '<br>';
echo 'Total: $'.$total;

if (
    !empty($_POST['customer_name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phone'])) {

    echo '<div class="container food-object">
    <h2>Thank you, ' . $customerName . '!</h2>
    <p class="italicize">Contact Info: ' . $email . '<br>' . $phone . '</p>
    <p class="italicize">tax: $' . $taxTotal . '</p>
    <p class="italicize">subTotal: $' . $subTotal . '</p>
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