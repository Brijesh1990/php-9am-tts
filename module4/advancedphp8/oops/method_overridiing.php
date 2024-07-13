<?php 
/* when we used to shared our logic or design patterns  to create same function pass with same arguments i.e called method overloading  
or
when we used to pass data using same function with same arguments or parameters i.e called method overloading


*/

class A 
{
    public function display($a,$b)
    {
      $c=$a+$b;
      echo $c."<br>";
    }
}
class B extends A 
{
    public function display($a,$b)
    {
      $d=$a*$b;
      echo $d."<br>";
    }
}

$obj=new B;
$obj->display(10,20);
?>