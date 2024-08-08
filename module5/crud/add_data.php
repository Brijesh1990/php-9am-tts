<?php 
// add data
require_once("config.php");
if(isset($_POST["reg"]))
{
$name=$_POST["name"];
$em=$_POST["email"];
$mob=$_POST["mobile"];
$insert="insert into tbl_register(name,email,phone) values('$name','$em','$mob')";
$exe=mysqli_query($con,$insert);
if($exe)
{
echo "<script>
alert('Data Adedd successfully')
window.location='./';
</script>";
}
}

// delete the data
if(isset($_GET["delid"]))
{
$delid=$_GET["delid"];
$delete="delete from tbl_register where rid='$delid'";
$exe=mysqli_query($con,$delete);
if($exe)
{
echo "<script>
alert('Data Deleted successfully')
window.location='./';
</script>";
}
}
// edit the data
if(isset($_GET["edid"]))
{
$edid=$_GET["edid"];
$select="select * from  tbl_register where rid='$edid'";
$exe=mysqli_query($con,$select);
$result=mysqli_fetch_array($exe);


}

// update the data
if(isset($_POST["upd"]))
{
$name=$_POST["name"];
$em=$_POST["email"];
$phone=$_POST["mobile"];
$edid=$_GET["edid"];
$upd="update tbl_register set name='$name',email='$em',phone='$phone' where rid='$edid'";
$exe=mysqli_query($con,$upd);

if($exe)
{
echo "<script>
alert('Data Updated successfully')
window.location='./';
</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src='main.js'></script>
</head>
<body>
<div class="app">

<div class="box1">
<img src="images/reg.png" alt="photo" style="width:250px; margin-top: 5%;"/>
</div>


<div class="box2">
<?php 
if(!isset($_GET["edid"]))
{
?>
<h1>Register Now</h1>
<form method="post">
<input type="text" name="name" placeholder="Name *" />
<br />
<br />
<input type="text" name="email" placeholder="Email *" />
<br />
<br />
<input type="text" name="mobile" placeholder="Mobile *" />
<br />
<br />
<input type="submit" name="reg" value="Register" placeholder="Name *" />
</form>
<?php 
}
else 
{
?>
<h1>Update Now</h1>
<form method="post">
<input type="text" name="name" value="<?php echo $result["name"];?>" placeholder="Name *" />
<br />
<br />
<input type="text" name="email"  value="<?php echo $result["email"];?>" placeholder="Email *" />
<br />
<br />
<input type="text" name="mobile"  value="<?php echo $result["phone"];?>" placeholder="Mobile *" />
<br />
<br />
<input type="submit" name="upd" value="Update" id="update_data" placeholder="Name *" />
</form>
<?php 
}
?>    


<!-- display data  -->
<table align="center" width="100%" style="margin-top:5%" cellpadding="5" cellspacing="5">
<?php 
// display the data
$select="select * from tbl_register";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{  
?>

<tr>
<td><?php echo $fetch["rid"];?></td>
<td><?php echo $fetch["name"];?></td>
<td><?php echo $fetch["email"];?></td>
<td><?php echo $fetch["phone"];?></td>
<td><a href="add_data.php?delid=<?php echo $fetch["rid"];?>" onclick="return confirm('Are you sure to delete Data ?')"><span>Delete</span></a> |
<a href="add_data.php?edid=<?php echo $fetch["rid"];?>" onclick="return confirm('Are you sure to edit Data ?')"><span>Edit</span></a>
</td>
</tr>   

<?php 
}
?>

</table>


</div>

</div>

</body>
</html>