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

//create an logic to add category here 
if(isset($_POST["addcategory"]))
{
$catnm=$_POST["categoryname"];
$catdesc=$_POST["categorydesc"];
$data=array("category_name"=>$catnm,"category_descriptions"=>$catdesc);
$chk=$this->insertalldata('tbl_ecomaddcategory',$data);
if($chk)
{
echo "<script>
alert('Your category added successfully')
window.location='./addcategory';
</script>";
}
}

// create a logic for manage or read or show category
$shwcategory=$this->selectalldata('tbl_ecomaddcategory');

// create a logic for add subcategory
if(isset($_POST["addsubcategory"]))
{
$catnm=$_POST["categoryname"];
$subcatnm=$_POST["subcategoryname"];
$subcatdesc=$_POST["subcategorydesc"];

$data=array("category_id"=>$catnm,"subcategory_name"=>$subcatnm,"subcategory_descriptions"=>$subcatdesc);

$chk=$this->insertalldata('tbl_ecomaddsubcategory',$data);
if($chk)
{
echo "<script>
alert('Your Subcategory added successfully')
window.location='./addsubcategory';
</script>";
}
}
// create a logic for manage or read or show subcategory
$shwsubcategory=$this->selectalljoindata('tbl_ecomaddsubcategory','tbl_ecomaddcategory','tbl_ecomaddsubcategory.category_id=tbl_ecomaddcategory.category_id');

// create an logic of add products here
if(isset($_POST["addproducts"]))
{
date_default_timezone_set("Asia/Calcutta");    
$catnm=$_POST["category"];
$subcatnm=$_POST["subcategory"];
$pnm=$_POST["pname"];
$tmp_name=$_FILES["pimage"]["tmp_name"];
$path="uploads/products/".$_FILES["pimage"]["name"];
move_uploaded_file($tmp_name,$path);
$qty=$_POST["qty"];
$oprice=$_POST["oprice"];
$newprice=$_POST["newprice"];
$pdesc=$this->conn->real_escape_string($_POST["pdesc"]);
$added_date=date("d/m/Y H:i:s a");

$data=array("category_id"=>$catnm,"subcategory_id"=>$subcatnm,"productname"=>$pnm,"photo"=>$path,"qty"=>$qty,"oldprice"=>$oprice,"newprice"=>$newprice,"descriptions"=>$pdesc,"added_date"=>$added_date);

$chk=$this->insertalldata('tbl_ecomaddproduct',$data);
if($chk)
{
echo "<script>
alert('Your Products added successfully')
window.location='./addproducts';
</script>";
}
}


// create a logic for manage or read or show product
$shwproducts=$this->selectalljoinalldata('tbl_ecomaddproduct','tbl_ecomaddcategory','tbl_ecomaddsubcategory','tbl_ecomaddcategory.category_id=tbl_ecomaddproduct.category_id','tbl_ecomaddsubcategory.subcategory_id=tbl_ecomaddproduct.subcategory_id');

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