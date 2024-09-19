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
}
?>