<?php
echo "Hello Reed" . "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";

$number = cal_days_in_month(CAL_GREGORIAN, 3, 2021); // 31
echo "There are {$number} days in March 2021";
?>
