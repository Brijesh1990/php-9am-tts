<?php 
$file=fopen("ajax.txt","r") or die("file is not found");
echo fgets($file);

?>