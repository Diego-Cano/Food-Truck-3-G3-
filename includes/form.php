<?php 
// form.php
// for our item constuctor and order form

class Curry{ // initialize Curry class variables
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Quantity= 0;
    public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price){ // constructing curry items
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
    }// end of Curry constructor

    public function addExtra($Extra){
        $this->Extras[] = $Extra;
    }//end of addExtra()

}//end of Curry class


$myCurry[] = new Curry(1, 'Thai Curry', 'Made with coconut milk and our signature curry paste, this traditional Thai curry combines herbs, spices, and aromatic leaves for a tantalizing experience you won\'t soon forget!', 12.95);
// $myCurries->addExtra("white");
// $myCurries->addExtra("brown");
// $myCurries->addExtra("sticky");
// $myCurries->addExtra("basmati");
// $myCurries->addExtra("cauliflower");
// $myCurries[] = $myCurry;

$myCurry[] = new Curry(2, 'Indian Curry', 'Our savory base of ginger, garlic, and turmeric combine with delicate spices to deliver a truly unforgettable meal!', 13.95);
// $myCurries->addExtra("white");
// $myCurries->addExtra("brown");
// $myCurries->addExtra("sticky");
// $myCurries->addExtra("basmati");
// $myCurries->addExtra("cauliflower");
// $myCurries[] = $myCurry;


$myCurry[]= new Curry(3, 'Japanese Curry', 'A milder option, our Japanese-style curry is packed full of hearty vegetables and thickend by a home-made roux', 10.95);
// $myCurries->addExtra("white");
// $myCurries->addExtra("brown");
// $myCurries->addExtra("sticky");
// $myCurries->addExtra("basmati");
// $myCurries->addExtra("cauliflower");
// $myCurries[] = $myCurry;
?>

<form action ="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<div class="flex-container column"><!--FLEXBOX FOR FORM ELEMENTS-->
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
        </div><!--end customer info-->

<?php
foreach($myCurry as $Curry){
    echo '
    <div class="container food-object">
        <h2 class="red-text">'.$Curry->Name.'</h2>
        <p class="description italicize">'.$Curry->Description.'<p>
        <p class="description italicize">$'.$Curry->Price.'<p>
                        
        <div class="input">
        <label for="'.$Curry->Name.'_spice" class="italicize font-change oswald">Select Your Spice Level</label>
        <ul>
            <li><input name="'.$Curry->Name.'_spice" id="spice" type="radio" value="mild">Mild<i class="fas fa-pepper-hot"></i></li>
            <li><input name="'.$Curry->Name.'_spice" id="spice" type="radio" value="spicy">Spicy<i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i><i class="fas fa-pepper-hot"></i></li>
        </ul>
        <span class="error">'.$spiceError.'</span>
        </div><!--end spice-->
                

        <div class="input">
        <label for="'.$Curry->Name.'_protein" class="italicize font-change oswald">Choose Your Protein(s)</label>
        <ul>
            <li><input name="'.$Curry->Name.'_protein" id="protein" type="radio" value="chicken">Chicken</li>
            <li><input name="'.$Curry->Name.'_protein" id="protein" type="radio" value="tofu">Tofu</li>
            <li><input name="'.$Curry->Name.'_protein" id="protein" type="radio" value="beef">Beef</li>
        </ul>
        <span class="error">'.$proteinError.'</span>
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
        <label for="qty" class="italicize font-change oswald">Please enter a quantity:</label>
            <input for "qty" name="qty" id="qty" type="number" min="1" max="15" value="<?php if(isset($_POST[','])) echo htmlspecialchars($_POST[',']) ;?">
            <span class="error">'.$qtyError.'</span>
        </div>

    </div> <!--end container food-object-->
    ' // end echo;
    ;} // end foreach

 
?>


        <input id="submit" type="submit" value="Complete Order">



     
 <!--FORM END--> </form>