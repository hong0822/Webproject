<?php
$score = "";

switch(intval($score/10)) {
    case "10":
    case "9":
        echo "A";
        break;
    case "8":
        echo "B";
        break;
    case "7":
        echo "C";
    case "6":
        echo "D";
    default:
        echo "E";
}
?>