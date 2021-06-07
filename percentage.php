<?php
$x=48;
$y=45;
$z=56;

$sum=($x+$y+$z);
$per=($sum/300)*100;
     
echo"$per";

if ($per > 90) 
{
    echo "<br/> First Class";
} 
else if ($per > 80)
{
    echo "<br/> Second Class";
} 
else if ($per > 60)
{
    echo "<br/> Third Class";
} 
else if ($per > 35) 
{
    echo "<br/> Just Passed";
} 
else 
{
    echo "<br/> Failed"; 
}

