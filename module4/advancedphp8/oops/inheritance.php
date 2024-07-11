<?php 
/*

inheritance is used to access one parent class properties by its child class i.e called inheritance
or
A class properties  access by its another class i.e called inheritance

A=>B

Note : a parent class properties access by its child class via extends keyword

There are three types of inheritance :
   a) single inheritance
   b) multilevel inheritance
   c) multiple inheritance 

   Note : in php multiple inheritance in not supported 
   




class A 
{
  public function Test1()
  {
  statements;
  }
}

class B extends A
{
  public function Test2()
  {
  statements;
  }
} 

$obj=new B;
$obj->Test1();
$obj->Test2();
*/


class A 
{
  public function Test1()
  {
    echo "Hey i am Brijesh"."<br>";
  }
}

class B extends A
{
  public function Test2()
  {
  echo "Hey i am Rakesh";
  }
} 

$obj=new B;
$obj->Test1();
$obj->Test2();

?>