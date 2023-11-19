<?php
$date = date("1");

// $date = "sunday";

switch($date){
    case "monday":
        echo "i hate monday";
        break;
    case "tuesday":
        echo "it fun time";
        break;
    case "wednesday":
        echo "it kharhai time";
        break;
    case "thursday":
        echo "it tableeg time";
        break;
    case "friday":
        echo "its jumma time";
        break;
    case "sunday":
        echo "it sleeping time";
        break;
    default:
    echo "{$date} is not day";

}
?>