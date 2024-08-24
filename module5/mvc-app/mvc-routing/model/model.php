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
    
    // create a member function for show all data
    
    // create a member function for delete data
    
    // create a member function for edit data
    
    // create a member function for update data
}
?>