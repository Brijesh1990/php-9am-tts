<?php 
// Prints something like: Monday
date_default_timezone_set("Asia/Calcutta");
echo date("l")."<br>";
echo "Today is :".date("l jS \of F Y H:i:s a")."<br>";
// 19th of October 1990
echo "19th of october 1990 is a day of :".date("l",mktime(0,0,0,10,19,1990));


?>