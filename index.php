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
</div><!--end about-->

            <?php include('includes/form.php'); ?>

              <!-- this div will only display when all required form fields are filled out and order is complete-->

            <?php //echo '<div class="center total"> Total is: '.$total->getSubtotal($myCurries).'</div>';?>

</div><!--end content wrap-->

<footer>

    <ul class="bottom-links">
        <li>Copyright &copy; 1993-2022</li>
        <li>Diego</li>
        <li>Ellen</li>
        <li>Brink</li>
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

</div> <!--WRAPPER-->
<script>document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href); </script>
</body>
</html>