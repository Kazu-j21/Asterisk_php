<?php
    class User{
        public $firstName="John";
        public $lastName="Doe";

        public $firstName2="Jane";
        public $lastName2="Doe";

        public function sayhello($hello){
            return "$hello"."$hello";
        }
        
        /*public function sayhello($firstName){
            //  return "$hello"."$hello2";
              return "$firstName"."$lastName";
          }
        */
    }
    
    $User1= new User();
    echo $User1->firstName;//
    echo $User1->lastName;
    echo "<br>";
    echo $User1->sayhello("hello, John Doe");

    echo "<br>";
    $User2=new User();
    //echo $User2->firstName2;
   // echo $User2->lastName2;
    //echo "<br>";
    echo $User2->sayhello("hello, Jane Doe");
?>