<?php 
require_once("model/adminmodel.php");
class AdminController extends AdminModel 
{
    // create a member function 
    public function __construct()
    {
      //access globally of this method
      parent::__construct();
      //admin login logic 
      if(isset($_POST["login"]))
      {
        $email=$_POST["email"];
        $password=$_POST["password"];
        $chk=$this->adminlogin('tbl_ecomadmin',$email,$password);
        if($chk)
        {
          echo "<script>
          alert('You are Logged In as Admin successfully')
          window.location='./dashboard';
          </script>";
        }
        else 
        {

            echo "<script>
            alert('Your email and password are incorrect try again')
            window.location='./';
            </script>";
        }
      }
      
    // create an logic of admin logout 
    if(isset($_GET["logout-here"]))
    {
        $chk=$this->logout();
        if($chk)
        {
            echo "<script>
            alert('You are Logout  as Admin successfully')
            window.location='./';
            </script>";  
        }
    }  
     //load your templates 
     if(isset($_SERVER["PATH_INFO"]))
     {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once("index.php");
                require_once("adminlogin.php");
                break;

            case '/dashboard':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("dashboard.php");
                require_once("footer.php");
                break;

            case '/addcategory':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("addcategory.php");
                require_once("footer.php");
                break;

            case '/managecategory':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managecategory.php");
                require_once("footer.php");
                break;

            case '/addsubcategory':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("addsubcategory.php");
                require_once("footer.php");
                break;

            case '/managesubcategory':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managesubcategory.php");
                require_once("footer.php");
                break;

            case '/addproducts':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("addproduct.php");
                require_once("footer.php");
                break;

            case '/manageproducts':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("manageproduct.php");
                require_once("footer.php");
                break;
            case '/managecustomer':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managecustomer.php");
                require_once("footer.php");
                break;

            case '/managecontacts':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managecontacts.php");
                require_once("footer.php");
                break;

            case '/managefeedback':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managefeedback.php");
                require_once("footer.php");
                break;
    
            default: 
            require_once("index.php");
            require_once("navbar.php");
            require_once("404.php");
            require_once("footer.php");
            break;

        }
     }  
    }
}

$obj=new AdminController;

?>