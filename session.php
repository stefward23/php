<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <p>This is the login page</p>
    <a href="home.php">This goes to the Home page</a>


    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        }
        else{
            echo "Missing username/password <br>";
        }
    }

?>