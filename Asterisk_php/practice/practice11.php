<?php
    class User{
        public $firstName;
        public $lastName;

        public function sayhello(){
            return "hello". "$this->firstName";
        }
        
        //public function __construct($first){
          //  $this->name="$first";
            //echo "The first name is $this->name";
        //}
    }
 
    $user1 =new User();
    $user1 ->firstName ="Jonnie";
    $user1 ->lastName ="Roe";
    echo $user1->sayhello();
?>