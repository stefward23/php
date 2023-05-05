<?php


$foods = array("apple","orange","banana", "coconut");

// echo $foods[0] . "<br>";
// $foods[0] = "pineapple";
// array_unshift($foods, "pineapple"); push to beginning of array
// array_push($foods, "kiwi");
// array_pop($foods);
// array_shift($foods); 
// $foods = array_reverse($foods);
echo count($foods);


foreach($foods as $food) {
    echo $food . "<br>";
    
}

?>