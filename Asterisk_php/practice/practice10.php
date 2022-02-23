<?php
//practice7.5.phpの続き
    class House {
        private $hasDoor=true;
        public $color;

        //Automatically called when a new object is created
        public function __construct($color){
            $this->color=$color;

            echo "This house is color $this->color. <br>";
        }

       // public function greeting($houseName){
         //   echo "Hello! The house name is $houseName";
        //}

        public function changehasDoor($newValue){
            $this->hasDoor=$newValue;
            //"$this" indicates "$this newHouse"
            // "$this"refers to the current object calling the method
           
           // echo $this->hasDoor;
        }

        public function gethasDoor(){
            return $this->hasDoor;
        }
    }


    $redHouse = new House("red");
    //$redHouse->color="red"; 

    $blueHouse = new House("blue");
    //$blueHouse->color="blue"; 

    $greenHouse = new House("green");
    //$greenHouse->color="green"; 

    //Get the value of $hasDoor of $newHouse Object and assign it to 
    //$hasDoor variable outside

    $hasDoor=$redHouse->gethasDoor();
    echo $hasDoor;

?>