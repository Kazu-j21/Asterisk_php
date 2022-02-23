<?php
    function isGreater($number){
        if ($number > 30){
            echo "$number:greater than 30";
        } elseif ($number > 20){
            echo "$number:greater than 20";
        } elseif ($number > 10){
            echo "$number:greater than 10";
        } else {
            echo "$number:Input a number at least greater than 10!";
        }
    }

    isGreater(22);

    echo "<br>";

    echo "Output:<br>";
    for($i = 5; $i < 16; $i++){
        echo "$i<br>";
    }

    function sumofXtoY($first, $second){
        
        for($i = $first; $i <= $second; $i++){
            if($i < $second){
                echo "$i+";
            }else {
                echo "$i=";
            }
        }
    }
    sumofXtoY(0, 30);


    function sum($first, $second){
        $total=0;
        for($i = $first; $i <= $second; $i++){

            $total=$total + $i;
            
        }return $total;
    }

    echo sum(0, 30);

    echo "<br>";

    $cars=array("Toyota", "Nissan", "Honda");  
        echo $cars[0] . $cars[1] . $cars[2];

        echo"<br>";

    $car = array("Toyota", "Nissan", "Honda");
    $arrlength=count($car);

    for($x=0; $x<$arrlength; $x++){
        echo $car[$x];
        echo"<br>";
    }

    $colors=array("red","green", "blue", "yellow");

    foreach($colors as $value){
        echo "$value <br>";
    }


    $carr = array("Toyota", "Nissan", "Honda");
    sort($carr);
    foreach($carr as $r){
        echo "$r<br>";
    }


    $z=array(10, 17, 22, 2, 7, 1, 11);

    sort($z);
    foreach($z as $zz){
        echo "$zz<br>";
    }

    rsort($z);
    foreach($z as $zz){
        echo "$zz<br>";
    }

?>



