<?php 



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