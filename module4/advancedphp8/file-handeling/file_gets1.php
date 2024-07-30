<?php 
$file=fopen('jquery.txt','r+') or die('file does not exist');
echo fgets($file);
?>