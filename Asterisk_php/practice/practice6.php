<?php
    class House {
        public $hasDoor=true;

      //  public function greeting(){
        //    echo "Hello! This is a new House Object!";
        //}

        public function greeting($houseName){
            echo "Hello! The house name is $houseName";
        }
    }

    class Shape{
        public $color="red";
    }

    //Create an object
    $newHouse=new House();
    echo $newHouse->hasDoor;

    echo"<br>";

   // echo $newHouse->greeting();
    /*echo*/$newHouse->greeting("House1");

    echo"<br>";

    $newHouse->hasDoor="false";
    echo "Does this thouse have a door? $newHouse->hasDoor";

    echo"<br>";

    //Another house object
    $anotherHouse =new House();
    echo $anotherHouse->hasDoor;

    echo"<br>";

    $square = new Shape(); //instantiation
    echo $square->color;

?>