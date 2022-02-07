<!-- curry-cart2.php -->
<?php

$Total= 0;
$Tax= 0;
$Subtotal= 0;
// $myItem = new Item(1, 'Taco', 'Our tacos are awesome!', 4.95);
// $myItem->addExtra('Sour Cream');
// $myItem->addExtra('Cheese');
// $myItem->addExtra('Guacamole');
// $items[] = $myItem;

class Item{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price){
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
    }// end of Item constructor

    public function addExtra($Extra){
        $this->Extras[] = $Extra;
    }//end of addExtra()
}//end of Item class



?>
    
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta value="viewport" content="width=device-width, initial-scale=1.0" >
<script src="https://kit.fontawesome.com/236cdfe8ce.js" crossorigin="anonymous"></script>
<link href="css/styles2.css" type="text/css" rel= "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Libre+Baskerville&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">

<title>Curry Cart</title>
</head>

<body>
<div class="wrapper">
    <header></header>     

<div class="hero">
    <div class="hero-text">
        <h1 class="headline">Our Curry Blows</h1>
    </div> 

</div><!--HERO-->
<?php include('includes/form.php'); ?>
<div class="flex-wrap">

                <div class="flex-container left">

                </div><!--end flex-container left-->
      

        <div class="flex-container right">
                <div class="container about">
        <h2 class="red-text">About this fictional food truck<h2>
            <p>Lorem ipsum dor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
                </div><!--end about-->

        <div class="container total"> <!--Total--->
            <h2>Thank you <?php echo $Name; ?>!</h2>
            <p class="italicizeize">Your order</p>
                <dl>

<!-- FOR LOOP TO SHOW LIST ITEMS -->

                    <!-- <dt>itemlonger value</dt>
                        <dd>$price</dd>
                    <dt>itemitem longer value</dt>
                        <dd>$price</dd>
                     <dt>item lalala</dt>
                        <dd>$price</dd> -->
                </dl>
            <p class="italicizeize"><?php echo $Tax;?></p>
            <p class="italicizeize"><?php echo $Subtotal;?></p>
            <h2>ORDER TOTAL:<span class="price italicize"> <?php echo $Total; ?></span></h2>
        </div><!--end total-->

        </div><!--end flex-container right-->
</div><!--flex-wrap-->

            <input type="submit" value="Complete Order">

</div> <!--WRAPPER-->
</body>
</html>