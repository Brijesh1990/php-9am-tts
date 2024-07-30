<?php 
$file="name.txt";
$del=unlink($file);
if($del)
{
    echo "File removed successfully";
}
else 
{
    echo "Something went wrong";
}


?>