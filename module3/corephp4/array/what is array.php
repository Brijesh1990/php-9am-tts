<?php 
/*array :array is a collection of multiple elements that is stored inside of single elements i.e called array
   or
 array is collection of multiple elements stored inside of single variables or elements i.e called array.
 
 $arr=array("brijesh","umesh","rakesh","nilesh","rupesh");

 intializations of array

 Array ( [0] => brijesh [1] => umesh [2] => rakesh [3] => nilesh [4] => rupesh ) 

         [0] => brijesh
          key    value

*/


// types of array  

// a) index or numeric array 
// b) associative array 
// c) multidimentional array


// numeric array

// $arr=array("brijesh","umesh","rakesh","nilesh","rupesh");
// print_r($arr);

// associative array
 
// $arr=array(0=>"brijesh",1=>"umesh",2=>"rakesh",3=>"nilesh",4=>"rupesh");
// print_r($arr);


// $arr=array("a"=>"brijesh","b"=>"umesh","c"=>"rakesh","d"=>"nilesh","e"=>"rupesh");
// print_r($arr);


//multidimentional array 

$arr=array("technical"=>array("php","react","angular","node","java"),"non-technical"=>array("wd","dm","seo","st"));
print_r($arr);

print_r($arr["technical"][3]);

print_r($arr["non-technical"][3]);
?>