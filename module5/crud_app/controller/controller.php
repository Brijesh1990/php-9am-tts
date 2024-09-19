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

        // delete task logic 
        if(isset($_GET["deleteid"]))
        {
            $deleteid=$_GET["deleteid"];
            $id=array("task_id"=>$deleteid);
            $chk=$this->deletealldata('tbl_addtask',$id);
            if($chk)
            {
                echo "<script>
                alert('Task Deleted successfully')
                window.location='./';
                </script>";
            }
        }
        
        // fetch or edit task details
        if(isset($_GET["editid"]))
        {
            $id=$_GET["editid"];
            $edittask=$this->editalldata('tbl_addtask','task_id',$id);
        }
        // create a logic of update task 
        if(isset($_POST["updatetask"]))
        {
            date_default_timezone_set("Asia/Calcutta");
            $id=$_GET["editid"];
            $tasknm=$_POST["taskname"];
            $added_date=$_POST["taskdate"];
            $chk=$this->updata('tbl_addtask',$tasknm,$added_date,'task_id',$id);
            if($chk)
            {
                echo "<script>
                alert('Task Updated successfully')
                window.location='./';
                </script>";
            }
        }
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

                case '/edittask': 
                    require_once('index.php');
                    require_once('header.php');
                    require_once('edittask.php');
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