<?php 
// form.php
// for our item constuctor and order form

 include('includes/curry.php');
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
foreach($myCurry as $Curry){ // creates menu and sets quantity property in curry object
    echo '
    <div class="container food-object">
        <h2 class="red-text">'.$Curry->Name.'</h2>
        <p class="description italicize">'.$Curry->Description.'<p>
        <p class="description italicize">$'.$Curry->Price.'<p>
                        

        <div class="input">
        <label for="sides" class="italicize font-change oswald">Don\'t forget extra rice!  </label>
        <ul>
            <li><input name="'.$Curry->ID.'_sides[]" id="sides" type="checkbox" value="white">White Rice</li>
            <li><input name="'.$Curry->ID.'_sides[]" id="sides" type="checkbox" value="brown">Brown Rice</li>
            <li><input name="'.$Curry->ID.'_sides[]" id="sides" type="checkbox" value="pineapple">Pineapple Rice</li> 
            <li><input name="'.$Curry->ID.'_sides[]" id="sides" type="checkbox" value="basmati">Basmati Rice</li>
            <li><input name="'.$Curry->ID.'_sides[]" id="sides" type="checkbox" value="cauliflower">Cauliflower Rice</li>
        </ul> 
        </div><!--end sides-->

        <div class="input">
        <label for="qty" class="italicize font-change oswald">'.$Curry->Name.' Quantity: </label>
            <input for "qty" name="'.$Curry->ID.'" id="qty" type="number" min="0" max="15" value="<?php if(isset($_POST[','])) echo htmlspecialchars($_POST[',']) ;?">
            <span class="error">'.$qtyError.'</span>
        </div>

    </div> <!--end container food-object-->
    '; // end echo;
    if((isset($_POST[$Curry->ID])) && $_POST[$Curry->ID]){ // if quantity is set
        $Curry->Quantity = $_POST[$Curry->ID]; // change the curry object's quantity property to the input from the form
    } // end if isset
    } // end foreach

?>
        <input id="submit" type="submit" value="Complete Order">
     
 <!--FORM END--> </form>