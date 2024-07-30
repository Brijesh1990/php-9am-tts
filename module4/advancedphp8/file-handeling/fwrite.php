<?php 
$file=fopen("name.txt","r+") or die("file is not found");
// echo $file;
// echo "file opened successfully";

// $txt1="hey i am brijesh and used file handeling";
// $txt2="hey just test i am able to write thease content or not";

// echo fwrite($file,$txt1);
// echo fwrite($file,$txt2);


$txt1='hey brijesh'.PHP_EOL;
$txt2='hey maulik';

// echo fwrite($file,$txt1.'\n');
// echo fwrite($file,$txt2);

echo fgets($file);
echo fgets($file);

?>