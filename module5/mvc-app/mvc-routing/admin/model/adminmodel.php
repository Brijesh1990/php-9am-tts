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
    //create a member function for logout as admin
    public function logout()
    {
        unset($_SESSION["admin_id"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    } 
}
?>