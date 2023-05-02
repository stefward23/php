<?php 


$date = date("l");

switch($date){
    case "Tuesday":
        echo "It's Taco Tuesdays";
        break;
    case "Wednesday":
        echo "The work week is half over";
    default: 
        echo"Today's a good day";
}



// $grade = "f";

// switch($grade){
//     case "A":
//         echo "You did awesome";
//         break;
//     case "B":
//         echo "You did good";
//         break;
//     case "C":
//         echo "You did ok";
//         break;
//     case "D":
//         echo "You did poorly";
//         break;
//     case "F":
//         echo "You failed";
//         break;
//     default:
//         echo "{$grade} is not vaild";
// }

?>