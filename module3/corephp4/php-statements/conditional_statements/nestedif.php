<?php 
/*nested if :if we used if within another if that is called nested if condition

 if(condition)
 {
  if(condtion)
  {
  statements
  }
 }

 else 
 {
 statements;
 
 }


*/

$a=20;
$b=10;
if($a>$b)
{
    if($a!=0 && $b!=0)
    {
     echo "<script>alert('a is greater than b and both are positive numbers')</script>";
    }
}

else 

{
    echo "<script>alert('a is less than b')</script>";
}


?>