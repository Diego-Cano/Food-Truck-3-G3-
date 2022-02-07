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

<div class="flex-wrap">
                <div class="flex-container left">
                <form action="">
                    <div class="container info">
                        <h2 class="red-text">Order Info</h2>
                            <label for="name">Your Name &#x2a;</label>
                                <span class="error"></span>
                            <input type="text" name="name" id="name" value="">

                            <label for="email">Email &#x2a;</label>
                                <span class="error"></span>
                            <input type="email" minlength="1" name="email" id="email" value="">

                            <label for="phone">Phone Number &#x2a;</label>
                                <span class="error"></span>
                            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" id="phone" value="">

                            <span class="required"><small><i>&#x2a; required</i></small></span>
                    </div><!--end customer info-->

                    <div class="container">
                        <label class="red-text" for="category_one">Thai Curry</label>
                        <ul>
                            <li>Red Curry<input name="category_one" id="" type="checkbox" value="Red Curry"></li>
                            <li>Yellow Curry<input name="category_one" id="" type="checkbox" value="Yellow Curry"></li>
                            <li>Green Curry<input name="category_one" id="" type="checkbox" value="Green Curry"></li>
                        </ul>
                    </div><!--end thai-->

                    <div class="container">
                        <label class="red-text" for="category_two">Indian Curry</label>
                        <ul>
                            <li>Massaman Curry<input name="category_two" id="" type="checkbox" value="massaman"></li>
                            <li>Panang Curry<input name="category_two" id="" type="checkbox" value="panang"></li>
                            <li>Coconut Curry<input name="category_two" id="" type="checkbox" value="coconut"></li> 
                        </ul>   
                    </div><!--end indian-->

                    <div class="container">
                        <label class="red-text" for="category_three">Japanese Curry</label>
                        <ul>
                            <li>Chicken Curry<input name="category_three" id="" type="checkbox" value="chicken"></li>
                            <li>Vegan Curry<input name="category_three" id="" type="checkbox" value="vegan"></li>
                            <li>Beef Curry<input name="category_three" id="" type="checkbox" value="beef"> </li> 
                        </ul>
                    </div><!--end japanese-->

                    <div class="container">
                        <label class="red-text" for="category_four">Sides</label>
                        <ul>
                            <li><input name="category_one" id="" type="checkbox" value="white">White Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="category_one" id="" type="checkbox" value="brown">Brown Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="category_one" id="" type="checkbox" value="sticky">Sticky Rice ~ <span class="price italicize">$999.00</span></li> 
                            <li><input name="category_one" id="" type="checkbox" value="basmati">Basmati Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="category_one" id="" type="checkbox" value="cauliflower">Cauliflower Rice ~ <span class="price italicize">$999.00</span></li>
                        </ul> 
                    </div><!--end sides-->
                    </form>
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
            <h2>Thank you (name)!</h2>
            <p class="italicizeize">Your order</p>
                <dl>
                    <dt>itemlonger value</dt>
                        <dd>$price</dd>
                    <dt>itemitem longer value</dt>
                        <dd>$price</dd>
                     <dt>item lalala</dt>
                        <dd>$price</dd>
                </dl>
            <p class="italicizeize">tax</p>
            <p class="italicizeize">subtotal</p>
            <h2>ORDER TOTAL:<span class="price italicize"> $623.67</span></h2>
        </div><!--end total-->

        </div><!--end flex-container right-->
</div><!--flex-wrap-->

            <input type="submit" value="Complete Order">

</div> <!--WRAPPER-->
</body>
</html>