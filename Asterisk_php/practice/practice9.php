<?php
    class User{
        public $firstName;
        public $lastName;

        public function sayhello(){
            return "hello";
        }
        
        /*public function sayhello($firstName){
            //  return "$hello"."$hello2";
              return "$firstName"."$lastName";
          }
        */
    }
    
    $User1= new User();
    $User1->firstName="John";//
    $User1->lastName="Doe";
    echo $User1->sayhello(). ", " .$User1->firstName. " ".$User1->lastName;

    echo "<br>";

    $User2=new User();
    $User2->firstName="Jane";
    $User2->lastName="Doe";
    echo $User2->sayhello(). ", " .$User2->firstName. " ".$User2->lastName;
    //echo "<br>";
    //echo $User2->sayhello("hello, Jane Doe");
?>