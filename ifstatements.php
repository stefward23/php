<?php 


$hours = 50;
$rate = 23;
$weekly_pay = null;

if($hours <= 0)
    {
        $weekly_pay = 0;
    }
else if ($hours <= 40) {
    $weekly_pay = $hours * $rate;
}
else {
    $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
}

echo " You made \${$weekly_pay} this week";



// $adult = true;

// if($adult){
//     echo "You may enter this site";
// }
// else {
//     echo "You must be an adult to enter";
// }

// $age = 150;

// if ($age >= 100) {
//     echo "You are too old";
// }
// else if ($age == 18){
//     echo "You may enter this site";
// } 
// else if ($age <= 0) {
//     echo "That is not a valid age";
// }
// else{
//     echo "You must be 18+ to enter";
// }
?>