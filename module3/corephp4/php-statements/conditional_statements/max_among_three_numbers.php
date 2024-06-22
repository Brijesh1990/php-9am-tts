<?php 
$n1=145;
$n2=146;
$n3=185;
if($n1>$n2 && $n1>$n3)
{
    echo "N1 is max   numbers";
}
elseif($n2>$n3 && $n2>$n1)
{
    echo "n2 is max numbers";
}
elseif($n3>$n2 && $n3>$n1)
{
    echo "N3 is max numbers";
}
else 
{
    echo "Something is wrong";
}



?>