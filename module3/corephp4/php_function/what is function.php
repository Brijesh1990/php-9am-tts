<?php 
/*what is function   
      A function is a block of code or group of code  i.e called function 
     
      How to declared any function 

         syntax :   
            function functionname()
            {
            
               statements;
            
            }
             
            function call();



   types of function 
     a) user defined function 
     b) pre defined function 


   How to call a function 
     a) call by value 
     b) call by reference

      

*/




// w.a.p to print your name using function 

// function display()
// {
//     $name="My name is brijesh";
//     echo $name;
// }
// display();



//user defined function 
// which function defined by users i.e called user defined function 

// function Amrin()
// {
//     $name="My name is Amrine";
//     echo $name;
// }  

// Amrin();


// pre defined function 
// which function are pre-defined by systems in php i.e called pe-defined function  

// $name="My name is Brijesh";
// print($name);

// $name="My name is Brijesh";
// print(var_dump($name));


// $name=array("brijesh","manish","krupal","sudesh","rajpal");
// print_r($name);


//pass an argument or parameter in function 

// function Display($a,$b)
// {
//     $c=$a+$b;
//     echo "The additions of numbers is :".$c; 
// }
// Display(10,20);


//function call by values

// function Name($fname)
// {
//     $firstname="My first name is :".$fname;
//     echo $firstname; 
// }
// Name("Brijesh");


//A function is return in body

// function Ad($a,$b)
// {

//     $c=$a+$b;
//     return $c; //terminate a function
   
// }

// echo Ad(10,20);


//A function call by reference

function Address(&$fname)  //refrence variables
{
    $firstname="My firstName is :Brijesh";
    echo $firstname."<br>";
}
$lname="My last name is :Pandey";
Address($firstname);
echo $lname;

?>