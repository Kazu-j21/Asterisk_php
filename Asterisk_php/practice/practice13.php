<?php
    class User{
        private $firstname;
        private $lastname;

         public function __construct($fname, $lname){
             $this->firstname = $fname;
             $this->lastname = $lname;
        }

        public function getnames(){
            return $this->firstname . " " . $this->lastname;
        }
    }

    $user1 = new User("John","Doe");
    
    echo $user1->getnames();
//18行目にecho $user1->getnames(). $this->firstname . " " . $this->lastname; does not work like practice9.php 
//because it's private. practice9.php is public. when it's public, both ok.
   

?>