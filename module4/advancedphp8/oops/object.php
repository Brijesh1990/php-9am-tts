<?php  
/* what is object in php  ?
   
     object is an instance of class i.e called object
     object in initialized with new keyword 
     object is examples of class 

     $obj=new classname;


*/

class A 
{
    public function Display()
    {
        $str="i am brijesh kumar pandey"."<br>";
        echo str_repeat($str,25);
    }
}
$obj=new A;
$obj->Display();

?>