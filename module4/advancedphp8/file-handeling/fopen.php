<?php 
$file=fopen("ajax.txt","r") or die("file is not found");
if($file)
{
echo "file opened successfully";
}
else 
{
    echo "something went wrong";
}

?>