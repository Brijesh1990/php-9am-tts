<?php 
/* 
access specifier or modifier is used to how can we display our class data in scope of member functions using private | public and protected.

public => whenever we create a class member function is public we can access a class data anywhere.
          Note : by default member function is always public

private =>whenever we create a class member function is private we can not access a class data out of class scope.

protected =>whenever we create a class member function is protected we can access a class data only with its one child class.

*/


class A 
{
    public $public="i am public member function";
    private $private="i am private member function";
    protected $protected="i am protected member function";

    public function Display()
    {
        echo $this->public."<br>";
        echo $this->private."<br>";
        echo $this->protected."<br>";
    }

}

$obj=new A;
// $obj->Display();
echo $obj->public."<br>";
echo $obj->private."<br>";
echo $obj->protected."<br>";



?>