<?php
/*  Switch is a replacement to using many elseif statements
        more effecient, less code to write.
*/

/*  EXAMPLE #1

$grade = "C";

switch ($grade) {
    case "A":
        echo "You did great";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did okay";
        break;
    case "D":
        echo "You did poorly";
        break;
    case "E":
        echo "You did failed";
        break;
    default;
        echo "{$grade} is not valid grade.";
}
*/

$date = "Wednesday";

switch ($date) {
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "It is taco Tusday!";
        break;
    case "Wednesday":
        echo "The work week is half over!";
        break;
    case "Thursday":
        echo "It's almost the weekend";
        break;
    case "Friday":
        echo "The weekends is here";
        break;
    case "Saturday":
        echo "Time to party";
        break;
    case "Sunday":
        echo "Time to relax";
        break;
    default:
        echo "{$date} is not a day.";
}
