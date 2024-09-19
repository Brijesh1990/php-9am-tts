<?php 
require_once("model/model.php");
class Controller extends Model 
{
    // create a member function 
    public function __construct()
    {
      //access globally of this method
      parent::__construct();
    //   create a logic to fetch all category in user panel navbar
    $shwcategory=$this->selectalldata('tbl_ecomaddcategory');
    // fetch all products in user content panel
    $shwprod=$this->selectalldata('tbl_ecomaddproduct');
    //create a logic to select products of selected category
    if(isset($_GET["categoryid"]))
    {
        $id=$_GET["categoryid"];
        $shwprod=$this->selectcategoryproducts('tbl_ecomaddproduct','category_id',$id);
    }
    // create a logic to select products details
    if(isset($_GET["productid"]))
    {
        $id=$_GET["productid"];
        $shwprod=$this->selectcategoryproducts('tbl_ecomaddproduct','product_id',$id);
    }
     //load your templates 
     if(isset($_SERVER["PATH_INFO"]))
     {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("slider.php"); 
                require_once("content.php");
                require_once("footer.php");
                require_once("login.php");
                break;

            case '/create-account':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("register.php");
                require_once("footer.php");
                require_once("login.php");
                break;

            case '/contact-us':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("contact.php");
                require_once("footer.php");
                require_once("login.php");
                break;

                
            case '/allproducts':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("allproducts.php");
                require_once("footer.php");
                require_once("login.php");
                break;

                       
            case '/productdetails':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("productdetails.php");
                require_once("footer.php");
                require_once("login.php");
                break;
    
            default: 
            require_once("index.php");
            require_once("header.php");
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