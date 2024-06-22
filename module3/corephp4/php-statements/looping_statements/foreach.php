<?php 
/* foreach : foreach loop is used to convert array as values and provides each values in array list. 

  $name=array("brijesh","amrin", "maulik","vandna");
  print_r($name);

*/

// $name=array("brijesh","amrin", "maulik","vandna");
// print_r($name);


$name=array("brijesh","amrin", "maulik","vandna","vivek","rajesh");
foreach($name as $value)
{
  echo "The Name of each users is :".$value."<br>";
}



?>