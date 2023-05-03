<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>key value pairs</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php 

    $capitals = array("Bim"=>"Bridgetown",
                     "Yard"=>"Kingston");

    $capital = $_POST["country"];
    echo $capital

    // $capitals["Bim"] = "Warrens";
    // $capitals["KY"] = "Georgetown";\
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    

    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
?>