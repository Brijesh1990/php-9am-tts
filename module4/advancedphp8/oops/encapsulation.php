<?php 
/* encapsulation : encapsulation is used to wrapping up data in a single object there we used encapsulations 
                   examples : a capsules wrap all small particals in a single objects 

                   Note : external data will be show but internal data will be hidden 

                   or

                   Encapsulation is a concept where we encapsulate all the data and member functions together to form an object.

                   or

                   Wrapping up data member and method together into a single unit is called Encapsulation.

                   or

                   Encapsulation also allows a class to change its internal implementation without hurting the overall functioning of the system.



*/
 
class person  
{  
public $name;  
public $age;  
function __construct($n, $a)  
{  
$this->name=$n;  
$this->age=$a;  
}  
public function setAge($ag)  
 {  
   
$this->ag=$ag;  
   
}  
   
public function display()  
   
{  
   
echo  "welcome ".$this->name."<br/>";  
   
return $this->age-$this->ag;  
   
}  
   
}  
   
$person=new person("sonoo",35);  
   
$person->setAge(1);  
   
echo "You are ".$person->display()." years old";  
   


?>