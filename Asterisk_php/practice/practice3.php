<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
</head>
<body>

<table class="table table-bordered">
  <thead>
    <tr class="table-primary">
      <th>Number</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $number=1;

    for($number=1; $number<5; $number++){
        echo "<tr><td>$number</td><td>This is Data $number</tr>";
    }
   ?>
  </tbody>
</table>
</body>
<style>
    table, th, td{
        text-align: center;
    }
    /*
    th{
        background-color: #00FFFF
    }
    */
</style>
</html>