<?php 
require_once("model/model.php");
class Controller extends Model 
{
   
    // create a member function 
    public function __construct()
    {
        session_start();
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

    // create a login for create customer account 
    if(isset($_POST["register"]))
    {
        date_default_timezone_set("Asia/Calcutta");
        $email=$_POST["email"];
        $name=$_POST["name"];
        $pwd=base64_encode($_POST["password"]);
        $cpwd=base64_encode($_POST["cpassword"]);
        $address=$_POST["address"];
        $mobile=$_POST["mobile"];
        $added_date=date("d.m.Y H:i:s a");
        $data=array("email"=>$email,"name"=>$name,"password"=>$pwd,"address"=>$address,"added_date"=>$added_date);
        if($pwd==$cpwd)
        {
        $this->insertalldata('tbl_addcustomer',$data);
        echo "<script>
          alert('Your account successfully created')
          window.location='./create-account';
        </script>";
        }
        else 
        {
            echo "<script>
            alert('Your password and confirmed password does not matched')
            window.location='./create-account';
          </script>";
        }
    }

//create logic for customer login 

if(isset($_POST["login"]))
{
$email=$_POST["email"];
$password=base64_encode($_POST["password"]);
$chk=$this->customerlogin('tbl_addcustomer',$email,$password);
if($chk)
{
echo "<script>
alert('You are Logged In as Admin successfully')
window.location='./';
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

// create an logic for logout 
if(isset($_GET["logout-here"]))
{
    $lg=$this->logout();
    if($lg)
    {
        echo "<script>
alert('You are logout successfully')
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