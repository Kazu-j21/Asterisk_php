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
        $age = 10;

        if ($age > 30) {
            echo "YOU ARE OLD!!";
        } else {
            echo "YOU ARE NOT OLD!";
        }

        $grade = -1;
  /*
        if ($grade >= 80){
            echo "Excellent";
        } elseif($grade >= 70){
            echo "Very Good";
        } elseif($grade >= 60){
            echo "Good";
        } elseif ($grade < 60){
            echo "Failure";
        }

        if ($grade >= 80){
            echo "Excellent";
        } elseif($grade >= 70){
            echo "Very Good";
        } elseif($grade >= 60){
            echo "Good";
        } else{
            echo "Failure";
        } 
*/
        if ($grade >= 80 && $grade <= 100){
            echo "Excellent";
        } elseif($grade >= 70 && $grade <= 79){
            echo "Very Good";
        } elseif($grade >= 60 && $grade <= 69){
            echo "Good";
        } elseif ($grade >= 0 && $grade <= 59){
            echo "Failure";
        } else if ($grade > 100 || $grade < 0){
            echo "Error";
        } 

        echo "<br>";

        $food = "chicken";
   

        switch ($food) {
            case "sushi":
                echo "Healthy and GOOD!";
                break;
            case "french fries":
                echo "Oily but Yummy!";
                break;
            case "salad":
                echo "NO comment: D";
                break;
            case "nori":
                echo "Is it food?";
                break;
            default:
                echo "Your food is $food";
        }

        echo "<br>";

        $number = 3;
        echo $number == 3 ? "The number is 3" : "The number is $number it is not 3";

        echo "<br>";

        $x=1;

        while($x<=7){
            echo "The number is :$x <br>";
            $x++;
        }


        do {
            echo "The number is : $x <br>";
            $x++;
        } while ($x <= 7);


        for($x=0; $x<=7; $x++){
            echo "The number is $x <br>";
        }


        $y=1;
         while ($y<=10) {
            if($y<10){
                echo "$y-";
            }else {
                echo "$y";
         }
         $y++;
        }

        echo "<br>";

        for($y=1; $y<=10; $y++){
            if($y<10){
                echo "$y-";
            }else {
                echo "$y";
            }
        }






    ?>
</body>
</html>