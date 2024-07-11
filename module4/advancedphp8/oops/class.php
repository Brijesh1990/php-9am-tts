<?php
/* what is class in php ? 
     A class is a group of members and its members functions i.e called class.
     or
     A class is a blue print of any object
     or
     A class is nothing whenever we can not create its object


     class classname 
     {
       public function functionname()
       {
       statememnts;
       }
     }
     object=new classname;
     object->call function();  

*/

class Name
{
    public function Display()
    {
        $name="My name is Brijesh";
        echo $name;
    }
}

$nm=new Name; // new Name is an object of class
$nm->Display();


?>