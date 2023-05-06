<?php 

    $password = "pie123";

    $hash = password_hash($password, PASSWORD_DEFAULT); // Uses Bcrypt algorithm


    if(password_verify("pie123", $hash)){
        echo "You are logged in!";
    }
    else {
        echo "Incorrect password";
    }
?> 