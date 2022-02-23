<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>

    <?php
    /*
    jjjjj
    */
     echo "Hello world";

     echo "<h1>This is a heading</h1>";

     $x=5+5;
     echo $x;

     echo "<br>";

     $color="blue";
     echo "My favorite color is $color.\n";

     $x=5;
     $y=4;

     echo $x+$y."<br>";


    $apple = 10;
    $orange = 15;

    echo $apple + $orange;

    echo "<h1>Personal Details</h1>";
    $name="Ryan Dupay";
    $age=28;
    $new_age = $age + 13;

    
    echo "Name: $name";
    print "<br>";
    echo "Age: $age";
    print "<br>";

    echo "In 2030, My age will be $new_age";
    echo "<br>";
    echo "In 2030, My age will be " . ($age + 13);
    echo "<br>";

    $int = 98543.;
    var_dump($int);

    $int = "aaaaaa";
    var_dump($int);

    echo strlen("Hello world!");

    echo "<br>";

    echo str_word_count("Hello Cebu Philippines!");

    echo "<br>";

    $bank = 5000;
    $design =15000;
    $online =25000;

    echo $bank + $design + $online;

    echo "<br>";

    $total= $bank + $design + $online;

    echo "$total yen";

    echo "<br>";

    $ipod = 20800;

    echo $total - $ipod;

    echo "<br>";

    $total=$total-$ipod;

    echo "Sara has $total yen";

    echo "<br>";

    $salary=30000;
    $year_salary=30000*12;

    echo "He can earn $year_salary yen in a year";

    echo "<br>";

    $salary = $salary / 2;
    echo "He can get $salary yen in a month";

    echo "<br>";

    $salary /= 2;
    echo "He can get $salary yen in a month";
    echo "<br>";

    $firstname="abc";
    $lastname='def';

    echo $firstname . " " . $lastname;

    echo "<br>";

    $salaryA =1000;
    $salaryB =1200;
    $salaryC =1400;

    var_dump($salaryA);

     ?>

<table border="1">
        <tr>
            <th>Salary of Mr.A is</th>
            <th><?php echo $salaryA . "$"; ?></th> 
        </tr>
        <tr>
            <th>Salary of Mr.B is</th>
            <th><?php echo $salaryB . "$"; ?></th>
        </tr>
        <tr>
            <th>Salary of Mr. C is</th>
            <th><?php echo $salaryC . "$" ?></th>
        </tr>
</table>
<?php

    $string="The Quick brown fox jumps over the lazy dog.";

    //Use PHP Built In STRING FUNCTIONS FOR THIS ACTIVITY
    //#1 Transform the string to all uppercaseletters
    //THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.


    //#2 Transform the string to all lowercase letters
    //the quick brown fox jumps over the lazy dog.


    //#3 Make the string's first character uppercase
    //The Quick brown fox jumps over the lazy dog.


    //#4 Make a string 's first character of each word uppercase
    //The Quick Brown Fox Jumps Over The Lazy Dog. 


    //all uppercase letters
    print(strtoupper($string))."<br>";
    //all lowercase letters
    print(strtolower($string))."<br>";
    // make a string's first character uppercase
    print(ucfirst($string))."<br>";
    // make a string's first character of all the words uppercase
    print(ucwords($string))."<br>";

    echo preg_replace('/The/', 'That' , $string , 1)."<br>";

    $input1=5;
    $input2=5;

    if ($input1 == $input2){
        echo "IT IS THE SAME";
    }

?>
</body>
<style>
    table, th{
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>
</html>