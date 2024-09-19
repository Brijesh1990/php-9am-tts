<?php 
class AdminModel 
{
public $conn="";
public function __construct()
{
// session start
session_start();
// database connections 
try
{
$this->conn=new mysqli("localhost","root","","mvc_ecomm_app");
//echo "successfully connected";
} 
catch(Exception $e)
{
die(mysqli_error($this->conn));
}
}
// create a member function for admin login
public function adminlogin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$exe=mysqli_query($this->conn,$select);
$num_rows=mysqli_num_rows($exe);
$fetch=mysqli_fetch_array($exe);
if($num_rows > 0)
{
$_SESSION["admin_id"]=$fetch["admin_id"];
$_SESSION["email"]=$fetch["email"];   
return true; 
}
else 
{
return false;  
}
}  
// create a member function for insert all data
public function insertalldata($table,$data)
{
    // convert $data array as values
    $key=array_keys($data);
    $key1=implode(",",$key);
    $value=array_values($data);
    $value1=implode("','",$value);
    $insert="insert into $table($key1) values('$value1')";
    $query=mysqli_query($this->conn,$insert);
    return $query; 
}

//create a member function for select all data
public function selectalldata($table)
{
    $select="select * from $table";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
    {
        $arr[]=$fetch;
    }
    return $arr;
} 

//create a member function for select all data and join tables
public function selectalljoindata($table1,$table2,$where)
{
    $select="select * from $table1 join $table2 on $where";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
    {
        $arr[]=$fetch;
    }
    return $arr;
} 

//create a member function for select all data and join tables
public function selectalljoinalldata($table1,$table2,$table3,$where,$where1)
{
    $select="select * from $table1 join $table2 on $where join $table3 on $where1";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
    {
        $arr[]=$fetch;
    }
    return $arr;
} 
//create a member function for logout as admin
public function logout()
{
unset($_SESSION["admin_id"]); //unset(() removed session from particular page
unset($_SESSION["email"]);
session_destroy();
return true;
} 
}
?>