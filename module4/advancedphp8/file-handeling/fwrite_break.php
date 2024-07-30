<?php 
$file=fopen("hi.txt","w+") or die("file is not found");

$txt="hi brijesh\n";
fwrite($file,$txt);
$text1="hi maulink\n";
fwrite($file,$text1);

?>