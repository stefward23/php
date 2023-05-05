<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"> <br>
        email: <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        // if(empty($age)) {
        //     echo "That number wasn't valid <br>";
        // }
        // else {
        // echo "You are  {$age} years old <br>";
        // }
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($email)) {
            echo "That email wasn't valid";
        }
        else {
        echo "You are  {$email} years old";
        }


        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);



        // echo "Hi {$username}";
        // echo "You are  {$age} years old";
        // echo "Your email is: {$email}";
    }
?>