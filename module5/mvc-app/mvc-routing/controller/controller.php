<?php 
require_once("model/model.php");
class Controller extends Model 
{
    // create a member function 
    public function __construct()
    {
      //access globally of this method
      parent::__construct();
     //load your templates 
     if(isset($_SERVER["PATH_INFO"]))
     {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once("index.php");
                require_once("navbar.php");
                require_once("content.php");
                require_once("footer.php");
                require_once("login.php");
                break;

            case '/create-account':
                require_once("index.php");
                require_once("navbar.php");
                require_once("register.php");
                require_once("footer.php");
                require_once("login.php");
                break;

            case '/contact-us':
                require_once("index.php");
                require_once("navbar.php");
                require_once("contact.php");
                require_once("footer.php");
                require_once("login.php");
                break;
    
            default: 
            require_once("index.php");
            require_once("navbar.php");
            require_once("404.php");
            require_once("footer.php");
            require_once("login.php");
            break;

        }
     }  
    }
}

$obj=new Controller;

?>