<?php 
require_once("navbar.php");
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
<div class="w-50 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Create your account</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />

<!-- register data -->
<form method="post" action="add-data.php" enctype="multipart/form-data">
<div class="form-group mt-2">
<input type="file" name="img"  class="form-control" />
</div> 
<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="text" name="fnm" placeholder="Enter firstName *" class="form-control" />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="text" name="lnm" placeholder="Enter lastName *" class="form-control" />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="email" placeholder="Enter email *" class="form-control" />
</div>  


<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="password" name="password" placeholder="Enter Password *" class="form-control" />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="password" name="confirmed-password" placeholder="Enter Confirmed Password *" class="form-control" />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="phone" placeholder="Enter Phone *" class="form-control" />
</div>  

<div class="form-group mt-2">
<textarea  name="address" placeholder="Enter address *" class="form-control"></textarea>
</div>  

<div class="form-group mt-2">
<select name="country" id="cn" onchange="return str(this.value)"  placeholder="Select country *" class="form-control">
<option value="">select country</option>
<?php 
require_once("config.php");

$select="select * from tbl_country";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
?>
<option value="<?php echo $fetch["cid"];?>"><?php echo $fetch["cname"];?></option>
<?php 
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
<input type="submit" name="reg-data" value="Register" class="btn btn-dark text-white" />
</div>  

</form>
</div>