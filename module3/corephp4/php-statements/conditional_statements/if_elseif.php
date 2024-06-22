<?php 
/*
if elseif : if is executed when condition is true elseif are executed while check multiple true conditions if condition is false else is executed

if(condition)
{
statements;
}
elseif(condition)
{
statements;
}
elseif(condition)
{
statements;
}
elseif(condition)
{
statements;
}
else 
{
statements;
}

*/

$a=40;
$b=40;
if($a>$b)
{
    echo "a is greater than b";
}
elseif($b>$a)
{
    echo "b is greater than a";
}
else 
{
    echo "a and b both are equal numbers";
}

?>