<?php
/*
class House{
    public $hasDoor =true;
    public $color;
    public $windowSize;

    public static function myStaticFunction(){
        echo "This is a House class.";
    }
}
*/

class House1{
    private $hasDoor=true;
    public $color;
    public static $price="1 million Pesos";


    public static function getPrice(){
        return self::$price;
    }
}

//We want to know how much the price costs for creating a House
//But we don't want to create the House object yet
 
echo House1::getPrice();
//echo House::$price;

?>
