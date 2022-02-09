<?php 

// form.php
// for our item constuctor and order form

class Curry{ // initialize Curry class variables
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price){ // constructing items
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
    }// end of Curry constructor

    public function addExtra($Extra){
        $this->Extras[] = $Extra;
    }//end of addExtra()
}//end of Curry class

// curry items ...


$myCurry = new Curry(1, 'Thai Curry', 'Made with coconut milk and our signature curry paste, this traditional Thai curry combines herbs, spices, and aromatic leaves for a tantalizing experience you won\'t soon forget!', 12.95);
// $myItem->addExtra('Sour Cream');
// $myItem->addExtra('Cheese');
// $myItem->addExtra('Guacamole');
// $items[] = $myItem;
$myCurry = new Curry(2, 'Indian Curry', 'Our savory base of ginger, garlic, and turmeric combine with delicate spices to deliver a truly unforgettable meal!', 13.95);
$myCurry = new Curry(1, 'Japanese Curry', 'A milder option, our Japanese-style curry is packed full of hearty vegetables and thickend by a home-made roux', 10.95);

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="container info">
                        <h2 class="red-text">Order Info</h2>
                            <label for="customer_name">Your Name &#x2a;</label>
                            <input type="text" name="customer_name" id="customer_name" value="<?php if(isset($_POST['customer_name'])) echo htmlspecialchars($_POST['customer_name']) ;?>">
                            <span class="error"><?php echo $nameError; ?></span>
                           

                            <label for="email">Email &#x2a;</label>
                            <input type="email" minlength="1" name="email" id="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
                            <span class="error"><?php echo $emailError; ?></span>
                          

                            <label for="phone">Phone Number &#x2a;</label>
                            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" id="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
                            <span class="error"><?php echo $phoneError; ?></span>
                

                            <span class="required"><small><i>&#x2a; required</i></small></span>

                            <input id="submit" type="submit" value="Complete Order">
                    </div><!--end customer info-->

                    <div class="container">
                        <h2 class="red-text">Thai Curry</h2>
                        <p class="description italicize"><?php //echo $Description?>
                        Made with coconut milk and our signature curry paste, this traditional Thai curry 
                        combines herbs, spices, and aromatic leaves for a tantalizing experience you won't soon forget!<p>

                        <div class="input">
                        <label for="protein" class="italicize font-change oswald">Choose Your Protein(s)</label>
                        <ul>
                            <li><input name="chicken" id="protein" type="checkbox" value="chicken">Chicken</li>
                            <li><input name="tofu" id="protein" type="checkbox" value="tofu">Tofu</li>
                            <li><input name="beef" id="protein" type="checkbox" value="beef">Beef</li>
                        </ul>
                        </div>

                        <div class="input">
                        <label for="spice" class="italicize font-change oswald">Select Your Spice Level</label>
                        <ul>
                            <li><input name="mild" id="spice" type="radio" value="mild">Mild<i class="fas fa-pepper-hot"></i></li>
                            <li><input name="medium" id="spice" type="radio" value="medium">Medium<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
                            <li><input name="spicy" id="spice" type="radio" value="spicy">Spicy<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
                        </ul>
                        </div>      
                    </div><!--end thai-->

                    <div class="container">
                        <h2 class="red-text">Indian Curry</h2>
                        <p class="description italicize"><?php //echo $Description?>
                        Our savory base of ginger, garlic, and turmeric combine with delicate spices to deliver a truly unforgettable meal!<p>
                        <label for="indian" class="italicize font-change oswald">Select Your Spice Level</label>
                        <ul>
                            <li><input name="indian" id="" type="radio" value="mild">Mild<i class="fas fa-pepper-hot"></i></li>
                            <li><input name="indian" id="" type="radio" value="medium">Medium<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
                            <li><input name="indian" id="" type="radio" value="spicy">Spicy<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
                        </ul>  
                    </div><!--end indian-->

                    <div class="container">
                        <h2 class="red-text">Japanese Curry</h2>
                        <p class="description italicize"><?php //echo $Description?>
                        A milder option, our Japanese-style curry is packed full of hearty vegetables and thickend by a home-made roux<p>
                        <label for="japanese" class="italicize font-change oswald">Select Your Spice Level</label>
                        <ul>
                            <li><input name="japanese" id="" type="radio" value="mild">Mild<i class="fas fa-pepper-hot"></i></li>
                            <li><input name="japanese" id="" type="radio" value="medium">Medium<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
                            <li><input name="japanese" id="" type="radio" value="spicy">Spicy<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
                        </ul>
                    </div><!--end japanese-->

                    <div class="container">
                        <h2 class="red-text">Sides</h2>
                        <label for="sides" class="italicize"><?php //echo $Description?><span class="font-change oswald">Don't forget rice!</span></label>
                        <ul>
                            <li><input name="sides" id="" type="radio" value="white">White Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="sides" id="" type="radio" value="brown">Brown Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="sides" id="" type="radio" value="sticky">Sticky Rice ~ <span class="price italicize">$999.00</span></li> 
                            <li><input name="sides" id="" type="radio" value="basmati">Basmati Rice ~ <span class="price italicize">$999.00</span></li>
                            <li><input name="sides" id="" type="radio" value="cauliflower">Cauliflower Rice ~ <span class="price italicize">$999.00</span></li>
                        </ul> 
                    </div><!--end sides-->
                    
 <!--FORM END--> </form>
