<?php include "includes/curry.php"?>// form.php
// for our item constuctor and order form

<form action="summary.php" method="post">

    <?php
foreach ($myCurry as $Curry) {
    echo '
    <div class="container food-object">
        <h2 class="red-text">' . $Curry->Name . '</h2>
        <p class="description italicize">' . $Curry->Description . '<p>
        <p class="description italicize">$' . $Curry->Price . '<p>

        <div class="input">
        <label for="spice" class="italicize font-change oswald">Select Your Spice Level</label>
        <ul>
            <li><input name="'.$Curry->Name.'_spice" id="spice" type="radio" value="mild">Mild<i class="fas fa-pepper-hot"></i></li>
            <li><input name="'.$Curry->Name.'_spice" id="spice" type="radio" value="medium">Medium<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
            <li><input name="'.$Curry->Name.'_spice" id="spice" type="radio" value="spicy">Spicy<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
        </ul>
        </div><!--end spice-->

        <div class="input">
        <label for="protein" class="italicize font-change oswald">Choose Your Protein(s)</label>
        <ul>
            <li><input name="'.$Curry->Name.'_protein" id="protein" type="checkbox" value="chicken">Chicken</li>
            <li><input name="'.$Curry->Name.'_protein" id="protein" type="checkbox" value="tofu">Tofu</li>
            <li><input name="'.$Curry->Name.'_protein" id="protein" type="checkbox" value="beef">Beef</li>
        </ul>
        </div><!--end protein-->

        <div class="input">
        <label for="sides" class="italicize font-change oswald">Don\'t forget rice!</label>
        <ul>
            <li><input name="'.$Curry->Name.'_sides" id="sides" type="checkbox" value="white">White Rice ~ <span class="price italicize">$3</span></li>
            <li><input name="'.$Curry->Name.'_sides" id="sides" type="checkbox" value="brown">Brown Rice ~ <span class="price italicize">$3</span></li>
            <li><input name="'.$Curry->Name.'_sides" id="sides" type="checkbox" value="pineapple">Pineapple Rice ~ <span class="price italicize">$4</span></li> 
            <li><input name="'.$Curry->Name.'_sides" id="sides" type="checkbox" value="basmati">Basmati Rice ~ <span class="price italicize">$3</span></li>
            <li><input name="'.$Curry->Name.'_sides" id="sides" type="checkbox" value="cauliflower">Cauliflower Rice ~ <span class="price italicize">$3</span></li>
        </ul> 
        </div><!--end sides-->

        <div class="input">
        <label for="'.$Curry->Name.'_qty" class="italicize font-change oswald">Please enter a quantity:</label>
            <input name="qty" type="number" min="0" max="15" size=3>
        </div>

    </div> <!--end container food-object-->
    ' // end echo;
    ;} // end foreach
?>

    <div class="container info">
        <h2 class="red-text">Order Info</h2>
        <label for="customer_name">Your Name &#x2a;</label>
        <input type="text" name="customer_name" id="customer_name" value="<?php if (isset($_POST['customer_name'])) {
    echo htmlspecialchars($_POST['customer_name']);
}
?>">
        <span class="error"><?php echo $nameError; ?></span>

        <label for="email">Email &#x2a;</label>
        <input type="email" minlength="1" name="email" id="email" value="<?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}
?>">
        <span class="error"><?php echo $emailError; ?></span>

        <label for="phone">Phone Number &#x2a;</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" id="phone" value="<?php if (isset($_POST['phone'])) {
    echo htmlspecialchars($_POST['phone']);
}
?>">
        <span class="error"><?php echo $phoneError; ?></span>

        <span class="required"><small><i>&#x2a; required</i></small></span>

        <input id="submit" type="submit" value="Complete Order">

</div><!--end customer info-->
     
 <!--FORM END--> </form>