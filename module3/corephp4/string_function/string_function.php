<?php 
// $str="i am asmin";
// echo strlen($str);

// $str="brijesh$$123456";
// echo base64_encode($str);


// $str="YnJpamVzaCQkMTIzNDU2";
// echo base64_decode($str);


// $str="brij212121";
// echo md5($str);

$str="DEEPAK RAWAL";
echo strtolower($str)."<br>";

$str1="deepak rawal";
echo strtoupper($str1)."<br>";

$str2="deepak rawal";
echo ucwords($str2)."<br>";


$str2="deepak rawal";
echo ucfirst($str2)."<br>";


$str2="deepak rawal";
echo trim($str2,"rawal")."<br>";


$str2="deepak rawal";
echo ltrim($str2,"rawal")."<br>";

$str2="deepak rawal";
echo rtrim($str2,"rawal")."<br>";


$str2="deepak rawal";
echo strrev($str2)."<br>";


$str2="deepak rawal";
echo str_shuffle($str2)."<br>";

echo rand(1111,9999)."<br>";

echo mt_rand(1111,9999)."<br>";

// implode is used to convert any array into string

// $arr=array("brijesh","amrin","milan","pooja");
// // print_r($arr);

// echo implode(" ",$arr);


//explode is used to convert any string into array 
$str="hi i am brijesh";
print_r(explode(" ",$str));


// list of string function

$str1="hi i am brijesh";
// echo str_repeat();
// echo str_replace();
// echo str_shuffle();
// echo str_split();
// echo strtotime();
// echo strstr();
// echo stristr();
// echo str_word_count();
// echo strpos();
// echo str_pad();
// echo implode();
// echo explode();


?>