<?php
// final class: id we used a class as final class we never inherited that class with any another class
// final class A 
// {
//     public function display1()
//     {
//         echo "This is Brijesh"."<br>";
//     }
// }
// class B extends A 
// {
//     public function display2()
//     {
//         echo "This is Maulik"."<br>";
//     }
// }

// class C extends B 
// {
//     public function display3()
//     {
//         echo "This is Vandna"."<br>";
//     }
// }

// $ob=new C;
// $ob->display1();
// $ob->display2();
// $ob->display3();



//final method : if we used final as method we never override that method 

class A 
{
   final public function display($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c;
    }
}

class B extends A 
{
    
    public function display($a,$b)
    {
        $c=$a*$b;
        echo "Multiplications of numbers is :".$c;
    }
}

$obj=new B; 
$obj->display(10,20);

?>