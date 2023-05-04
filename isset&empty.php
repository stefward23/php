<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty</title>
</head>
<body>
    
    <form action="index.php" method="post">

        <label>username: </label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>

    </form>

</body>
</html>

<?php

    // isset() = returns TRUE if a variable is declared and not null
    // empty() = returns TRUE if a variable is not declared, false, null, ""
  

    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
    
    // if(isset($_POST["login"])){
        
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // if(empty($username)){
    //     echo "Username is missing";
    // }
    // else if (empty($password)){
    //     echo "Password is missing";
    // }
    // else {
    //     echo "Hello $username ";
    // }
    // }
?>