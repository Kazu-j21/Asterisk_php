<?php
    //PARENT
    class Person{
        public $name;
        public $age;
        public function __construct($name, $age){
            $this->name =$name;
            $this->age=$age;
            }
        public function introduce(){
            echo "My name is {$this->name}. My age is {$this->age}";
            }
        }

    //CHILD
    class Student extends Person{
        public $grade;

        public function greet(){
            echo "Hello <br>";
        }
    }

    //Another CHILD of Person
    class Employee extends Person{
        private $salary;
    }

    $lawrence =new Student("Lawrence", 21);  //  $lawrence =new Student("Lawrence", 21); は Object
    $lawrence ->greet();
    $lawrence->introduce();
?>