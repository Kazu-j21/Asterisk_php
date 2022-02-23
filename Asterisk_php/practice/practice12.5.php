<?php
    class User{
        private $firstName;

        public function setname($fname){
            $this->firstName = $fname;
           
           //echo $this->firstName; 
        }

        public function getname(){
            return $this->firstName;
        }

    }

    $user1 = new User();
    $user1->setname("Joe");
    echo $user1->getname();


?>