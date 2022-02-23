<?php
    class User {
        protected $username;


    public function setname($user) {
        $this->username = $user;
        }
    }

    class Admin extends User {
        public function expressYourRole() {
            //return "Admin"; // string="";
            return strtolower("Admin");
        }

        public function sayHello() {
            return "Hello admin, $this->username";
        }
    }

    $admin1 = new Admin();
    $admin1->setname("Balthazar");
    echo $admin1->sayHello();


?>