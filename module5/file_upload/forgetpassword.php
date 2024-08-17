<?php 
require_once("navbar.php");
require_once("config.php");
if(isset($_POST["frg-pass"]))
{
    $email=$_POST["email"];
    $select="select password from tbl_register where email='$email'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $num_rows=mysqli_num_rows($exe);
    if($num_rows==1)
    {
        $pass=base64_decode($fetch["password"]);
        
        echo "<script>
        alert('your password is :'+$pass);
        window.location='login.php';
        </script>";
    }
    else 
    {
        echo "<script>
        alert('your email does not exist try again');
        window.location='forgetpassword.php';
        </script>";

    }
}


?>
<!-- content here -->
<div class="w-75 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Forget Your password ?</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />
<div class="row">
    <div class="col-md-5">
 <img src="https://th.bing.com/th/id/OIP.vKZkWpM0c6N2oAmmBzup7gHaHa?rs=1&pid=ImgDetMain" class="img-fluid w-75">
    </div>
    <div class="col-md-7">
        
<!-- forget password here -->
<form method="post">
<div class="form-group mt-5">
<input type="text" name="email" placeholder="Enter email *" class="form-control" />
</div>  

<div class="form-group mt-2">
<input type="submit" name="frg-pass" value="Submit" class="btn btn-dark text-white" />

</div>  

</form>
    </div>
</div>

</div>