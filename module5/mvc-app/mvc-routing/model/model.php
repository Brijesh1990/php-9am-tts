<?php 
class Model 
{
public $conn="";
public function __construct()
{
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
// create a member function for insert data
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

// create a member function for customers login
public function customerlogin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$exe=mysqli_query($this->conn,$select);
$num_rows=mysqli_num_rows($exe);
$fetch=mysqli_fetch_array($exe);
if($num_rows > 0)
{
$_SESSION["customer_id"]=$fetch["customer_id"];
$_SESSION["email"]=$fetch["email"];
$_SESSION["name"]=$fetch["name"];   
return true; 
}
else 
{
return false;  
}
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

//create a member function for select category and fetch its products
public function selectcategoryproducts($table,$column,$id)
{
$select="select * from $table where $column='$id'";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;
} 


// create a member function for delete data

// create a member function for edit data

// create a member function for update data 

// create a member function for logout as customer
public function logout()
{
    unset($_SESSION["customer_id"]);
    unset($_SESSION["email"]);
    unset($_SESSION["name"]);
    session_destroy();
    return true;
}
}
?>