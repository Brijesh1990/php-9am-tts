<?php 
require_once("navbar.php");
require_once("config.php");
// set session 
if(!isset($_SESSION["register_id"]))
{
echo "<script>
window.location='index.php';
</script>";
}
// manage logged in profile of customers
if(isset($_SESSION["register_id"]))
{
$rid=$_SESSION["register_id"];    
$select="select * from tbl_register where rid='$rid'";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);

}

// delete account
if(isset($_GET["del-id"]))
{
$delid=base64_decode($_GET["del-id"]);
$delete="delete from tbl_register where rid='$delid'";
$exe=mysqli_query($con,$delete);
if($exe)
{
unset($_SESSION["register_id"]);
unset($_SESSION["fnm"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You account removed successfully')
window.location='login.php';
</script>";


}

}
// update account

if(isset($_POST["upd-data"]))
{
$rid=$_SESSION["register_id"];    
date_default_timezone_set("Asia/Calcutta");    
// file upload or photo upload
$tmp_name=$_FILES["img"]["tmp_name"];
$size=$_FILES["img"]["size"]/1024;
$type=$_FILES["img"]["type"];
$path="uploads/customers/".$_FILES["img"]["name"];
move_uploaded_file($tmp_name,$path);
$fnm=$_POST["fnm"];
$lnm=$_POST["lnm"];
$em=$_POST["email"];
$phone=$_POST["phone"];
$add=$_POST["address"];
$cn=$_POST["country"];
$st=$_POST["state"];
$ct=$_POST["city"];
$reg_date=date("d/m/Y H:i:s a");

$upd="update tbl_register set photo='$path',firstname='$fnm',lastname='$lnm',email='$em',phone='$phone',address='$add',cid='$cn',sid='$st',ctid='$ct' where rid='$rid'";

$exe=mysqli_query($con,$upd);
echo "<script>
alert('You account updated successfully')
window.location='dashboard.php';
</script>";


}

?>

<!-- load jquery for ajax and fetch country , state and city --> 
<script src='https://code.jquery.com/jquery-3.7.1.js'></script>
<script>
function str(val)
{
// alert('hi')
$.ajax({
type:"POST",
url:"getdata.php",
data:"cn="+val,
success:function(data)
{
$("#st").html(data);
}

})
}

function str1(val)
{
// alert('hi')
$.ajax({
type:"POST",
url:"getdata.php",
data:"st="+val,
success:function(data)
{
$("#ct").html(data);
}

})
}
</script>    

<!-- content here -->
<div class="w-75 mx-auto mt-3 p-5 shadow">
<h3 class="text-left">Welcome to : <?php echo ucfirst($_SESSION["fnm"]);?></h3>
<hr class="border border-1 border-dark w-25" />
<div class="row">
<div class="col-md-5">
<ul class="sidebar-links" style="min-width:280px !important">
<li><a href="dashboard.php">Manage Profile</a></li>

<li><a href="changepassword.php">Change Password</a></li>
<li><a href="dashboard.php?del-id=<?php echo  base64_encode($fetch["rid"]);?>" onclick="return confirm('Are you sure to delete your account ?')">Delete Account ?</a></li>

<li><a href="contact.php">Manage Notifications</a></li>

<li><a href="logout.php" class="btn btn-md btn-danger text-white">Logout ?</a></li>


</ul>
</div>
<div class="col-md-7">       
<h3>Manage your profile</h3>
<hr class="border border-1 border-dark w-25" />
<form method="post" enctype="multipart/form-data">
<div class="form-group mt-2">
<img src='<?php echo $fetch["photo"];?>' class="img-fluid w-25" />    
<input type="file" name="img"  class="form-control" />
</div> 
<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="text" name="fnm" value="<?php echo $fetch["firstname"];?>" placeholder="Enter firstName *" class="form-control" />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="text" name="lnm" value="<?php echo $fetch["lastname"];?>" placeholder="Enter lastName *" class="form-control" />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="email" value="<?php echo $fetch["email"];?>" placeholder="Enter email *" class="form-control" />
</div>  

<div class="form-group mt-2">
<input type="text" name="phone" value="<?php echo $fetch["phone"];?>" placeholder="Enter Phone *" class="form-control" />
</div>  

<div class="form-group mt-2">
<textarea  name="address" placeholder="Enter address *" class="form-control">
<?php echo $fetch["address"];?>
</textarea>
</div>  

<div class="form-group mt-2">
<select name="country" id="cn" onchange="return str(this.value)"  placeholder="Select country *" class="form-control">
<option value="">select country</option>
<?php 
require_once("config.php");
$select="select * from tbl_country";
$exe=mysqli_query($con,$select);
while($fetch1=mysqli_fetch_array($exe))
{
if($fetch1["cid"]==$fetch["cid"])
{

?>
<option value="<?php echo $fetch1["cid"];?>" selected='selected'><?php echo $fetch1["cname"];?></option>

<?php 
}
else 
{
?>
<option value="<?php echo $fetch1["cid"];?>"><?php echo $fetch1["cname"];?></option>

<?php 
}
}
?>
</select>
</div>  

<div class="form-group mt-2">
<select name="state" id="st"  onchange="return str1(this.value)"   placeholder="Select state *" class="form-control">
<option value="">select state</option>
<option value=""></option>
</select>
</div>  
<div class="form-group mt-2">
<select name="city" id="ct"  placeholder="Select city *" class="form-control">
<option value="">select city</option>
<option value=""></option>
</select>
</div>  

<div class="form-group mt-2">
<input type="submit" name="upd-data" value="Update Here" class="btn btn-dark text-white" />
</div>  

</form>

</div>
</div>

</div>