<?php 
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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

//  create customer account 
if(isset($_POST["register"]))
{
    
require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");    
$mail = new PHPMailer(true);
try {    
date_default_timezone_set("Asia/Calcutta");
$email=$_POST["email"];
$name=$_POST["name"];
$pwd=base64_encode($_POST["password"]);
$cpwd=base64_encode($_POST["cpassword"]);
$address=$_POST["address"];
$mobile=$_POST["mobile"];
$added_date=date("d.m.Y H:i:s a");
//Server settings
$mail->SMTPDebug =false;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'brijeshpandey.tops@gmail.com';                     //SMTP username
$mail->Password   = 'inhv wvzr ihkp ypfe';                               //SMTP password
$mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 465 or  587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
//$mail->setFrom('brijeshpandey.tops@gmail.com', 'Mailer');
$mail->addAddress($_POST["email"], 'Joe User');     //Add a recipient
//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
$attachment=__DIR__."<?php echo $baseurl;?>/thanks/thanks.pdf";
// $mail->addAttachment($attachment,'thanks.pdf');    
//Optional name
//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Thanks for create account with Us!';
$mail->Body    = "<img src='' />".'<br>'.'<h2>Thank You for Signing Up” Email Template Examples</h2>."<br>"."Welcome emails have four times more open rates and five times more clicks. Thats a power you should use wisely The typical goals of doing a round of thank you for signing up emails are the following"';
$data=array("email"=>$email,"name"=>$name,"password"=>$pwd,"address"=>$address,"phone"=>$mobile,"added_date"=>$added_date);
if($pwd==$cpwd)
{
$mail->send();    
$this->insertalldata('tbl_addcustomer',$data);
echo "<script>
alert('Your account successfully created')
window.location='./create-account';
</script>";
}
}
catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
// else 
// {
// echo "<script>
// alert('Your password and confirmed password does not matched')
// window.location='./create-account';
// </script>";
// }
//}

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

// add product in cart
if(isset($_POST["addtocart"]))
{
date_default_timezone_set("Asia/Calcutta");
$product_id=$_POST["product_id"];
$customer_id=$_SESSION["customer_id"];
$price=$_POST["newprice"];
$qty=$_POST["qty"];
$subtotal=$price*$qty;
$added_date=date("d.m.Y H:i:s a");
$data=array("pid"=>$product_id,"customer_id"=>$customer_id,"price"=>$price,"quantity"=>$qty,"subtotal"=>$subtotal,"added_date"=>$added_date);
if($pwd==$cpwd)
{
$this->insertalldata('tbl_ecomcart',$data);
echo "<script>
alert('Your Product addedd successfully in Cart')
window.location='./viewcart';
</script>";
}
}

// logic for count cart after login
if(isset($_SESSION["customer_id"]))
{
$customer_id=$_SESSION["customer_id"];    
$carttotal=$this->cartcount('tbl_ecomcart','cartid','customer_id',$customer_id);
}

// applied contact us email sending logic
if(isset($_POST["send"]))
{

require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");    
$mail = new PHPMailer(true);
try {

date_default_timezone_set("Asia/Calcutta");
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$added_date=date("d.m.Y H:i:s a");    
//Server settings
$mail->SMTPDebug =false;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'brijeshpandey.tops@gmail.com';                     //SMTP username
$mail->Password   = 'inhv wvzr ihkp ypfe';                               //SMTP password
$mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 465 or  587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress("brijeshpandey.tops@gmail.com", 'Joe User');     //Add a recipient
// $mail->addAddress('ellen@example.com');
//Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Contact details send in emails';
$mail->Body    = "<img src='https://raw.githubusercontent.com/gist/fpanhan/1891a641c9fc183939a87bf696efec8d/raw/993fcbffdad748e045c0cc33d48dfca8e8fed271/contact.gif' />".'<br>'.'Customers Name is :'.$name."<br>"."Customers emails is :".$email."<br>"."Customers phone is :".$phone."<br>"."Customers subject is :".$subject."<br>"."Customers messages is :".$message;
$mail->send();
$data=array("name"=>$name,"email"=>$email,"phone"=>$phone,"subject"=>$subject,"message"=>$message,"added_date"=>$added_date);
$chk=$this->insertalldata('tbl_ecomcontact',$data);
if($chk)
{
echo "<script>
alert('Thanks for contact with us we will get your email Our admin will contact with you Soon!')
window.location='./contact-us';
</script>";
}
}
catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 
}


// forget password and send password in email logic 
if(isset($_POST["frg"]))
{

require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");    
$mail = new PHPMailer(true);
try {    
$email=$_POST["email"];    
//Server settings
$mail->SMTPDebug =false;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'brijeshpandey.tops@gmail.com';                     //SMTP username
$mail->Password   = 'inhv wvzr ihkp ypfe';                               //SMTP password
$mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 465 or  587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress("brijeshpandey.tops@gmail.com", 'Joe User');     //Add a recipient
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Forget Password you can get your password in your email';
$pass=$this->frgpassword('tbl_addcustomer','password',$email);
$mail->Body    = "<h3>Your forget passsword is :</h3>".$pass;

if($pass)
{
$mail->send();
echo "<script>
alert('Your Password successfully send on your email please checked your email')
window.location='./';
</script>";

}
else 
{
echo "<script>
alert('Your email does not registered with us Please checked')
window.location='./forgetpassword';
</script>";
}
}
catch (Exception $e) 
{
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

// create an logic to display a cart after login 
if(isset($_SESSION["customer_id"]))
{
$customer_id=$_SESSION["customer_id"];
$shwcrt=$this->joindata('tbl_ecomcart','tbl_ecomaddproduct','tbl_addcustomer','tbl_ecomcart.pid=tbl_ecomaddproduct.product_id','tbl_ecomcart.customer_id=tbl_addcustomer.customer_id','customer_id',$customer_id);
}
// create an logic of subtotal 
if(isset($_SESSION["customer_id"]))
{
$customer_id=$_SESSION["customer_id"];
$subtotal=$this->subtotalcrt('tbl_ecomcart','subtotal','customer_id',$customer_id);

}
// manage customer profile
if(isset($_SESSION["customer_id"]))
{
$customer_id=$_SESSION["customer_id"];
$shwprofile=$this->manageprofile('tbl_addcustomer','customer_id',$customer_id);

}

// fetch country in manage customer logic
$country=$this->selectalldata('tbl_addcountry');
// fetch state in manage customer logic
$state=$this->selectalldata('tbl_addstate');
// fetch city in manage customer logic
$city=$this->selectalldata('tbl_addcity');

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
require_once("header.php");
require_once("navbar.php");
require_once("register.php");
require_once("footer.php");
require_once("login.php");
break;


case '/manageprofile':
require_once("header.php");
require_once("navbar.php");
require_once("manageprofile.php");
require_once("footer.php");
require_once("login.php");
break;


case '/changepassword':
require_once("header.php");
require_once("navbar.php");
require_once("changepassword.php");
require_once("footer.php");
require_once("login.php");
break;

case '/forgetpassword':
require_once("header.php");
require_once("navbar.php");
require_once("forgetpassword.php");
require_once("footer.php");
require_once("login.php");
break;
    
case '/contact-us':
require_once("header.php");
require_once("navbar.php");
require_once("contact.php");
require_once("footer.php");
require_once("login.php");
break;


case '/allproducts':
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

case '/viewcart':
require_once("index.php");
require_once("header.php");
require_once("navbar.php");
require_once("viewcart.php");
require_once("footer.php");
break;

case '/checkout-here':
require_once("index.php");
require_once("header.php");
require_once("checkout.php");
require_once("footer.php");
break;


case '/manageorder':
require_once("header.php");
require_once("navbar.php");
require_once("manageorder.php");
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