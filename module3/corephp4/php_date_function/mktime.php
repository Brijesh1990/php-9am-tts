<?php 
// print future date and past date and current date of systems there we used mktime
// mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));


// past date
// $date=mktime(00,00,00,date("m"),date("d")-129,date("Y"));

// echo "129 days before the date is :".date("d/m/Y",$date);

// // futures date
// $date=mktime(00,00,00,date("m"),date("d")+29,date("Y"));
// echo "29 days before the date is :".date("d/m/Y",$date);



// // current date
// $date=mktime(00,00,00,date("m"),date("d"),date("Y"));
// echo "29 days before the date is :".date("d/m/Y",$date);




// current date
$date=mktime(00,00,00,date("m")+2,date("d")+29,date("Y")+1);
echo "After 29 , 2 months 1years  days the  date is :".date("d/m/Y",$date);


?>