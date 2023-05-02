<?php 

    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is {$ticket}";



    // $age = 25;
    // $citizen = false;

    // if($age >= 18 && $citizen){
    //     echo "You can vote";
    // }
    // else{
    //     echo "You cannot vote";
    // }



    // $temp = 15;
    // $cloudy = true;


    // if ($temp >= 0 && $temp <= 35){
    //     echo "The weather is good.";
    // }
    // else{
    //     echo "The weather is bad";
    // }

    // if ($temp > 10 || $temp < 31){
    //     echo "The weather is good. <br>";
    // }
    // else{
    //     echo "The weather is bad <br>";
    // }

    // if(!$cloudy){
    //     echo "It's cloudy. <br>";
    // }
    // else {
    //     echo "It's sunny";
    // }
?>