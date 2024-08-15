<?php
require_once("config.php");
// manage logged in profile of customers
if(isset($_SESSION["register_id"]))
{
$rid=$_SESSION["register_id"];    
$select="select * from tbl_register where rid='$rid'";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);

}

if(isset($_POST["cn"]))
{
$cn=$_POST["cn"];
$select="select * from tbl_state where cid='$cn'";
$exe=mysqli_query($con,$select);
while($fetch2=mysqli_fetch_array($exe))
{
if($fetch2["sid"]==$fetch["sid"])
{
?>

<option value="<?php echo $fetch2["sid"];?>" selected="selected"><?php echo $fetch2["sname"];?></option>

<?php       
}
else 
{
?>

<option value="<?php echo $fetch2["sid"];?>"><?php echo $fetch2["sname"];?></option>

<?php 
}
}
}
?>

<?php 
if(isset($_POST["st"]))
{
$st=$_POST["st"];
$select="select * from tbl_city where sid='$st'";
$exe=mysqli_query($con,$select);
while($fetch3=mysqli_fetch_array($exe))
{
if($fetch3["ctid"]==$fetch["ctid"])
{
?>

<option value="<?php echo $fetch3["ctid"];?>" selected="selected"><?php echo $fetch3["ctname"];?></option>

<?php       
}
else 
{
?>
<option value="<?php echo $fetch3["ctid"];?>"><?php echo $fetch3["ctname"];?></option>
<?php 
}
}
}
?>