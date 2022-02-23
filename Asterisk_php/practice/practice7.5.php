<?php
    class House {
        private $hasDoor=true;

        //Automatically called when a new object is created
        public function __construct(){
            echo "The object was created";
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


    $newHouse = new House();
    $newHouse->changehasDoor("new value"); 

    //Get the value of $hasDoor of $newHouse Object and assign it to 
    //$hasDoor variable outside

    $hasDoor=$newHouse->gethasDoor();
    echo $hasDoor;


    //practice10.phpにつづく
?>