<?php 
ob_start();
error_reporting(0);
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
// change password here

if(isset($_POST["change-pass"]))
{
    $rid=$_SESSION["register_id"];
    $opass=base64_encode($_POST["opass"]);
    $npass=base64_encode($_POST["npass"]);
    $cpass=base64_encode($_POST["cpass"]);

    $select="select password from tbl_register where rid='$rid'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $pass=$fetch["password"];
    if($pass==$opass && $npass==$cpass)
    {
        // $rid=$_SESSION["register_id"];
        $upd="update tbl_register set password='$npass' where rid='$rid'";
        $exe=mysqli_query($con,$upd);
        if($exe)
        {
            unset($_SESSION["register_id"]);
            unset($_SESSION["fnm"]);
            unset($_SESSION["email"]);
            session_destroy();
            echo "<script>
            alert('Your password update successfully')
            window.location='index.php';
            </script>";
        }
        else 
        {
            echo "<script>
            alert('Your Old password, New Password & Confirmed Password does not match try again')
            window.location='changepassword.php';
            </script>";
        }

    }

}
?>

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
<h3>Change your password here </h3>
<hr class="border border-1 border-dark w-25" />
<form method="post">

<div class="form-group mt-2 col-md-6">
<input type="password" name="opass"  placeholder="Enter Oldpassword *" class="form-control" />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="password" name="npass"  placeholder="Enter New Password *" class="form-control" />
</div>   
<div class="form-group mt-2 col-md-6">
<input type="password" name="cpass"  placeholder="Enter Confrmed Password *" class="form-control" />
</div>   

<div class="form-group mt-2">
<input type="submit" name="change-pass" value="Change Password here" class="btn btn-dark text-white" />
</div>  

</form>

<?php 
ob_flush();
?>



</div>
</div>

</div>