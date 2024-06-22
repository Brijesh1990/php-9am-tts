<?php 
/* loop : number of iterations are repeated again and again there applied loop
          for loop are executed when condition is true 
   
          for(initialization; condition; increment/decrement)
          {
          statements;
          }


*/

//  $i=10;
//  for($i=1;$i<=10;$i++)
//  {
// //    echo $i;  
// echo $i."<br>";   
//  }




// $i=10;
// for($i=1;$i<=10;$i++)
// {
// //    echo $i; 
// if($i==6)
// {
//     break;
// }
// echo $i."<br>";   
// }



$i=10;
for($i=1;$i<=10;$i++)
{
//echo $i; 
if($i==2 || $i==5)
{
    continue;
}
echo $i."<br>";   
}


?>