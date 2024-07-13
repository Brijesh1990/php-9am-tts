<?php 
/* when we used to shared our logic or design patterns  to create same function pass with different arguments i.e called method overloading  
or
when we used to pass data using same function with different arguments or parameters i.e called method overloading

Note : in php method overloading generated warning

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
    public function display($d,$e,$f)
    {
      $g=$d*$e*$f;
      echo $g."<br>";
    }
}

$obj=new B;
$obj->display(10,20,30);
?>