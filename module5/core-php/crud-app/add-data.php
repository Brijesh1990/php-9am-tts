<?php 
require_once("config.php");

// add employee
if(isset($_POST["add-employee"]))
{
date_default_timezone_set("Asia/Calcutta");    
$fnm=$_POST["fnm"];
$lnm=$_POST["lnm"];
$em=$_POST["email"];
$pwd=base64_encode($_POST["password"]);
$cpwd=base64_encode($_POST["confirmed-password"]);
$phone=$_POST["phone"];
$add=$_POST["address"];
$reg_date=date("d/m/Y H:i:s a");

// insert data write a sql query
if($pwd==$cpwd)
{
$query="insert into tbl_addemployee(firstname,lastname,email,password,phone,address,registered_date) values('$fnm','$lnm','$em','$pwd','$phone','$add','$reg_date')";
$exe=mysqli_query($con,$query);
echo "<script>
alert('Thanks for adding employee')
window.location='add-employee.php';
</script>"; 
}

else 
{
echo "<script>
alert('Your password and confirmed password does not matched try again')
window.location='add-employee.php';
</script>"; 
}
}

// add contacts data



// add register data


?>