<?php
    class User{
        private $firstName;

        public function setname($user1){
            $this->firstName=$user1;
           
           // echo $this->firstName; 
        }

        public function getname(){
            return $this->firstname;
        }
    
    }

    $user1 = new User();
    $user1->setname("John");


?>