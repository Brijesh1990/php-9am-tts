<!-- bvalidator validations -->
<script>
$(document).ready(function(){
$("#checkout").bValidator();
})
</script>
<!-- view cart -->
<div class="container p-5 mt-5 shadow">  
<div class="row">
<div class="col-md-7">
<h4>Please fill all details of customers for Product Deleivery</h3>
<form method="post" id="checkout" enctype="multipart/form-data">
<div class="form-group mt-3">
<input type="text" name="email" placeholder="Email *" data-bvalidator="required,email" value="<?php echo $shwprofile[0]["email"];?>" class="form-control">
</div>
<div class="form-group mt-3">
<input type="text" name="name" placeholder="Name *" data-bvalidator="required,alpha" value="<?php echo $shwprofile[0]["name"];?>" class="form-control">
</div>

<div class="form-group mt-3">
<input type="text" name="mobile" placeholder="Phone *" data-bvalidator="required,minlen[10],maxlen[10],digit" class="form-control" value="<?php echo $shwprofile[0]["phone"];?>">
</div>



<div class="form-froup mt-3">
<textarea name="address" class="form-control" placeholder="Address *" data-bvalidator="required"><?php echo $shwprofile[0]["address"];?></textarea>
</div>


<div class="form-group mt-3">
<select name="country" class="form-control">
<option value="">-select country-</option>
<?php 
foreach($country as $country1)
{
?>
<option value="<?php echo $country1["cid"];?>"><?php echo $country1["countryname"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<select name="state" class="form-control">
<option value="">-select state-</option>
<?php 
foreach($state as $state1)
{
?>
<option value="<?php echo $state1["sid"];?>"><?php echo $state1["statename"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<select name="city" class="form-control">
<option value="">-select city-</option>
<?php 
foreach($city as $city1)
{
?>
<option value="<?php echo $city1["ctid"];?>"><?php echo $city1["cityname"];?></option>
<?php 
}
?>
</select>
</div>



<div class="form-group mt-3">
<button type="submit" class="btn btn-lg btn-dark text-white">Go For Online Payments >> </button>
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



