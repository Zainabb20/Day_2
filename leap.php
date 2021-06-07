<?php
function isLeap($year)
{
    if($year%4==0)
        print("It is a leap year");
    else
        print("It is not a leap year");
}

$year=2021;
isLeap($year);
?>

