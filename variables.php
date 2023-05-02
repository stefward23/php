<?php 
    $name = "Stefan Ward"; //strings
    $food = "pizza";
    $email = "usernameward@gmail.com";

    $age = 34; //integers
    $users = 2;
    $quantity = 4;

    $gpa = 3.5; //floats
    $price = 5.99;

    $employed = true; // booleans
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hello {$name} <br>";    
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";
    echo "Your are {$age} years old <br>";
    echo "There are {$users} online <br>";
    echo "You would like to buy {$quantity} items <br>";

    echo "Your gpa is {$gpa} <br>";
    echo "Your pizza is \${$price} <br>";

    echo "Online status: {$online}<br>";

    echo "You have ordered {$quantity} x {$food}s <br>";

    $total = $quantity * $price;

    echo "Your total is \${$total}<br>"


?>

