<?php 
/* 
abstract class : when we create a class as abstract class we never create an object of that class  but we access abstract class via inheritance.

abstract class is also used for data hidding process we can hide some internal data from some users there we used data abstractions hidding process

*/

abstract class A 
{
    public function Display()
    {
        echo "i am Brijesh";
    }
}

class B extends A 
{
    
    public function Display1()
    {
        echo "i am Amrin";
    }
}

$obj=new B;
$obj->Display();
$obj->Display1();


?>