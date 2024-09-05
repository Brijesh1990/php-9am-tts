<?php 
require_once("model/model.php");
class Controller extends Model 
{
    public function __construct()
    {
        parent:: __construct();
        // create a logic to add task
        if(isset($_POST["addtask"]))
        {
            date_default_timezone_set("Asia/Calcutta");
            $tasknm=$_POST["taskname"];
            $added_date=date("d/m/Y H:i:s a");
            $data=array("taskname"=>$tasknm,"added_date"=>$added_date);
            $chk=$this->insertalldata('tbl_addtask',$data);
            if($chk)
            {
                echo "<script>
                alert('Task addedd successfully')
                window.location='./';
                </script>";
            }
        }
        // display all task logic
        $shw=$this->selectalldata('tbl_addtask');
        
        // load your templates of view here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                    require_once('index.php');
                    require_once('header.php');
                    require_once('content.php');
                    break;
                
                default: 
                    require_once('index.php');
                    require_once('header.php');
                    require_once('404.php');
                    break;
            }
        }
    }

}

$obj=new Controller;

?>