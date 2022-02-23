<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function helloMsg(){
            echo "Hello world";
        }
    helloMsg();
     

        echo"<br>";

/*
        function familyname($firstname){
            echo "$firstname Dupay.<br>";
        }

        familyname("Ryan");
        familyname("Japhet");
        familyname("Abegail");
        familyname("Bernadine");
        familyname("Virgie");
*/

        echo"<br>";


        function familyname($firstname, $year){
            echo "$firstname Dupay. Born in $year. <br>";
        }

        familyname("Ryan", "1989");
        familyname("Japhet", "1989");
        familyname("Abegail", "1989");
        familyname("Bernadine", "1989");
        familyname("Virgie", "1989");

        $x=3;
        $y-4;

        function sum($x, $y){
            $z=$x + $y;
            return $z;
        }

        echo "5+10=" . sum(5, 10) . "<br>";
        echo "7+13=" . sum(7, 13) . "<br>";
        echo "2+4=" . sum(2, 4) . "<br>";


       $i=10; 
        function myCheck(){
            global $i;
            echo "Valiable x inside function is : $i";
        }
        myCheck();

        echo "Valiable x outside function is: $i";


        echo"<br>";

        function sumofXtoY($first, $second){
            $total=0;
            for($i = $first; $i <= $second; $i++){
    
                $total=$total + $i;
                
            }return $total;
        }
    
        echo sumofXtoY(0, 10);

    ?>
</body>
</html>