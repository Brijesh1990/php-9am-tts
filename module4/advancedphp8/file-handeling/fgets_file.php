<?php 
$file=fopen("javascript.txt","r+") or die("file is not found");

echo fgets($file);
?>