<?php 
class Model 
{
    public $conn="";
    public function __construct()
    {
        
        try {

            // $this->conn=new mysqli("localhost","root","","crud_operations");

            // provides server connections

            $this->conn=new mysqli("sql211.byethost9.com","b9_37280777","m123456","b9_37280777_crud_operations");

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

    // create a member function for delete all data
    public function deletealldata($table,$id)
    {
          //convert $data array as string 
       $key=array_keys($id);
       $key1=implode(",",$key);
       $value=array_values($id);
       $value1=implode("','",$value);
       $delete="delete from $table where $key1='$value1'";
       $query=mysqli_query($this->conn,$delete);
       return $query;
    }

    // create a member function for edit data
    public function editalldata($table,$column,$id)
    {
        $select="select * from $table where $column='$id'";
        $query=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($query);
        $arr[]=$fetch;
        return $arr;
    }

    // create  a member function or update data 
    public function updata($table,$tasknm,$added_date,$column,$id)
    {
        $upd="update $table set taskname='$tasknm',added_date='$added_date' where $column='$id'";
        $query=mysqli_query($this->conn,$upd);
        return $query;

    }
}
?>