<?php 
$price=3500;
$checkin=mktime(0,0,0,date("m"),date("d"),date("Y"));
$checkout=mktime(0,0,0,date("m"),date("d")+2,date("Y"));

$diff=($checkout-$checkin)/86400;
echo $diff."<br>";

echo "Total bill is :".$price*$diff;



?>