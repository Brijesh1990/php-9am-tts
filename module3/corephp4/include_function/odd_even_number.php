<?php 
if(isset($_POST["chk"]))
{
    $number=$_POST["number"];
    if($number%2==0)
    {
     echo "<h2 align='center' style='color:green'>Number is Even</h2>";
    }
    else 
    {
        
     echo "<h2 align='center' style='color:red'>Number is Odd</h2>";

    }
}


?>