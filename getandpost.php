<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and Post</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="">quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>

</body>
</html>

<?php
    // GET and POST

    // echo $_GET["username"] . "<br>";
    // echo $_GET["password"] . "<br>";

    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";

    $item = "pizza";
    $price = "3.99";
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
    
?>