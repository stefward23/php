<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
</head>
<body>
   <form action="index.php" method="post">
    <label>radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
   </form><br>
</body>
</html>

<?php
//    $x = $_POST["x"];
//    $y = $_POST["y"];
//    $z = $_POST["z"];
//    $total = null;

    //$total = abs($x); absolute value function 
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    // $total = pow($x, $y); powerfunction
    // $total = sqrt($x); square root
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(1, 6); generates random number between 1 and 6

//    echo $total;


    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference} cm <br>";
    echo "Area = {$area} cm^2 <br>";
    echo "Volume = {$volume} cm^3 <br>";
?>