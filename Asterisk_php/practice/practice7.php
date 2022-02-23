<?php
    class House {
        private $hasDoor=true;

       // public function greeting($houseName){
         //   echo "Hello! The house name is $houseName";
        //}

        public function changehasDoor($newValue){
            $this->hasDoor=$newValue;
            //"$this" indicates "$this newHouse"
            // "$this"refers to the current object calling the method
            echo $this->hasDoor;
        }
    }


    $newHouse = new House();
    echo $newHouse->changehasDoor("new value");
    
?>