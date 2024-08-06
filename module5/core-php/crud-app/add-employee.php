<?php 
require_once("navbar.php");
require_once("config.php");

?>
<!-- content here -->
<div class="w-100 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Add employee here</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />
<!-- add employee form -->
<div class="row">
<div class="col-md-4"> <img src="https://th.bing.com/th/id/OIP.vKZkWpM0c6N2oAmmBzup7gHaHa?rs=1&pid=ImgDetMain" class="img-fluid w-75">
</div>
<div class="col-md-8">
<form method="post" action="add-data.php">
<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="text" name="fnm" placeholder="Enter firstName *" class="form-control" required/>
</div>   

<div class="form-group mt-2 col-md-6">
<input type="text" name="lnm" placeholder="Enter lastName *" class="form-control" required />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="email" placeholder="Enter email *" class="form-control" required />
</div>  


<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="password" name="password" placeholder="Enter Password *" class="form-control" required />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="password" name="confirmed-password" placeholder="Enter Confirmed Password *" class="form-control" required />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="phone" placeholder="Enter Phone *" class="form-control" required />
</div>  

<div class="form-group mt-2">
<textarea  name="address" placeholder="Enter address *" class="form-control"></textarea>
</div>  


<div class="form-group mt-2">
<input type="submit" name="add-employee" value="AddEmployee" class="btn btn-dark text-white" />
</div>  
</form>

<!-- display all employees  -->
<table class="table table-responsive mt-4">
<?php 
$select="select * from tbl_addemployee";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
?>
<tr>
    <td><?php echo $fetch["empid"];?></td>
    <td><?php echo $fetch["firstname"];?></td>
    <td><?php echo $fetch["lastname"];?></td>
    <td><?php echo $fetch["email"];?></td>
    <td><?php echo $fetch["phone"];?></td>
    <td><?php echo $fetch["address"];?></td>
    <td><a href="" class="btn btn-sm btn-danger bg-danger text-white"><span class="bi bi-trash"></span></a>
    |  <a href="" class="btn btn-sm btn-primary bg-primary text-white"><span class="bi bi-pencil"></span></a>
</td>
</tr>   

<?php 
}
?>
</table>

</div>
</div>

</div>