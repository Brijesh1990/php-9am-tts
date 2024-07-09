<?php 
$arr=array("brijesh","milan","brijesh","brijesh","milan","vandana","axay");
// sort($arr); //sort is used to sort any array in asending order with its values
// foreach($arr as $value)
// {
//     echo "The name is :".$value."<br>";
// }


// asort($arr); //asort is used to sort any array in asending order with its values
// foreach($arr as $value)
// {
//     echo "The name is :".$value."<br>";
// }

// arsort($arr); //arsort is used to sort any array in desending order with its values
// foreach($arr as $value)
// {
//     echo "The name is :".$value."<br>";
// }


// ksort($arr); //ksort is used to sort any array in asending order with its key
// foreach($arr as $value)
// {
//     echo "The name is :".$value."<br>";
// }



krsort($arr); //krsort is used to sort any array in desending order with its key
foreach($arr as $value)
{
    echo "The name is :".$value."<br>";
}
?>