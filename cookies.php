<?php

    setcookie("fav_food", "pie", time() + 86400, "/"); //expires after 1 day
    setcookie("drink", "coke", time() + (86400 *2), "/");
    setcookie("fav_dessert", "cake", time() + (86400 *2), "/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else {
        echo "What is your fav food";
    }

?> 