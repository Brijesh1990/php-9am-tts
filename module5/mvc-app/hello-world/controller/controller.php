<?php 
require_once("model/model.php");
class Controller extends Model
{
    // create a member function 
    public function __construct()
    {
        // print hello world 
        // $name="Hello world";
        // echo $name;

        // add two number input from users
        // if(isset($_POST["ad"]))
        // {
        //     $a=$_POST["n1"];
        //     $b=$_POST["n2"];
        //     $c=$a+$b;
        //     echo "<h3 align='center' style='color:green'>Additions of numbers is : $c</h3>";
        // }

        // check name availabilty in array
        if(isset($_POST["chk"]))
        {
            $arr=array("maulik","vandana","rahul","amrin","manish","brijesh","kumar");
            $nm=$_POST["nm"];
            if(in_array($nm,$arr))
            {
                echo "<h3 align='center' style='color:green'>This name is taken by us Thanks</h3>";
            }
            else 
            {

                echo "<h3 align='center' style='color:red'>This name is Not avialable please contact with admin</h3>";
            }
        }

    }
}
$obj=new Controller;
?>