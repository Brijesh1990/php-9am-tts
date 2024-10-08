<!-- view cart -->
<div class="container p-5 mt-5 shadow">  
<div class="row">
<div class="col-md-7">
<h4>Please fill all details of customers for Product Deleivery</h3>
<form method="post" enctype="multipart/form-data">
<div class="form-group mt-3">
<input type="text" name="email" placeholder="Email *" class="form-control">
</div>
<div class="form-group mt-3">
<input type="text" name="name" placeholder="Name *" class="form-control">
</div>


<div class="form-group mt-3">
<select name="country" class="form-control">
<option value="">-select country-</option>
<option value="">India</option>
<option value="">Usa</option>
</select>
</div>

<div class="form-group mt-3">
<select name="state" class="form-control">
<option value="">-select state-</option>
<option value="">Gujrat</option>
<option value="">California</option>
</select>
</div>

<div class="form-group mt-3">
<select name="city" class="form-control">
<option value="">-select city-</option>
<option value="">Rajkot</option>
<option value="">Navada</option>
</select>
</div> 

<div class="form-froup mt-3">
<textarea name="address" class="form-control" placeholder="Address *"></textarea>
</div>

<div class="form-group mt-3">
<input type="text" name="mobile" placeholder="Phone *" class="form-control">
</div>

<div class="form-group mt-3">
<button type="button" class="btn btn-lg btn-dark text-white">Go For Online Payments >> </button>
</div>
</form>   
</div>
<div class="col-md-5">
<h4>Total Items in Cart<span class="badge bg-danger text-white ms-2"><?php echo $carttotal[0]["total_count"];?></span></h4>
<hr />
<!-- view cart here -->
<table class="table table-responsive">
<?php 
foreach($shwcrt as $row)
{
?>
<tr>  
<td><img src="admin/<?php echo $row["photo"];?>" style="width:55px; height:55px"></td>  
<td><?php echo $row["productname"];?></td>   
<td><?php echo $row["subtotal"];?></td>       
</tr>
<?php 
}
?>
<!-- subtotal of cart -->
<tr  class="bg-dark text-white mt-3 fs-2">
<td align="right" colspan="7" class="mt-4">Subtotal of Products is Rs. <?php echo $subtotal[0]['sum_total'];?></td>
</tr>

</table>
    </div>
</div>

</div>



