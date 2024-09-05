<?php 
class Model 
{
    public $conn="";
    public function __construct()
    {
        
        try {

            $this->conn=new mysqli("localhost","root","","crud_operations");

        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn,$e));
    }
}
    // create a member function for insert all data
    public function insertalldata($table,$data)
    {
       //convert $data array as string 
       $key=array_keys($data);
       $key1=implode(",",$key);
       
       $value=array_values($data);
       $value1=implode("','",$value);

       $insert="insert into $table($key1) values ('$value1')";
       $query=mysqli_query($this->conn,$insert);
       return $query;
    }

    // create a member function for display all data
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
}
?>