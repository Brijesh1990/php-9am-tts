<!-- Amrine shoes corner -->
<div class="container-fluid p-5 mt-5 shadow">
<nav aria-label="breadcrumb ms-5">
  <ol class="breadcrumb" style="margin-left:10%; font-size:20px">
    <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>">Home</a></li>
    <li class="breadcrumb-item"><a href="#">AllProducts</a></li>
    <li class="breadcrumb-item active" aria-current="page">Products Details</li>
  </ol>
</nav>     
<!-- all products load here -->
<div class="row">
<!-- fetch  products selected via category here uploaded via admin -->
<div class="col-md-6 mt-5">   
<form method="post">  
<p class="text-center"><img src="admin/<?php echo  $shwprod[0]["photo"];?>" class="img-fluid" style="width: 70%; height: 300px;" /></p>
</div>
<div class="col-md-6 mt-5">
<p class="fs-3"><input type="hidden" name="product_id" value="<?php echo  $shwprod[0]["product_id"];?>"></p>
<p class="fs-3"><?php echo  $shwprod[0]["productname"];?></p>
<p class="fs-5">Rs. <del><?php echo  $shwprod[0]["oldprice"];?></del><input type="text" name="newprice" id="newprice" value="<?php echo $shwprod[0]["newprice"];?>" readonly style="border:none; width:60px"> -/</p>
<p class="fs-3">
<label class="fs-5">Select Quantity:</label>    
<input type="number" name="qty" id="qty" onchange="return subtotal(this.value)" value="1" min="1" max="10" class="form-control w-50" /></p>
<p class="fs-3 bg-dark w-50 text-white p-2"><label>Subtotals of Rs.<label id="tot"><?php echo  $shwprod[0]["newprice"];?> </label></p>

<p class="">
<a href=""><button type="button" class="btn btn-dark text-white btn-lg">Continue Shop >></button></a> 
<?php
if(!isset($_SESSION["customer_id"]))
{ 
?>
<button type="button" class="btn btn-success text-white btn-lg"  onclick="addcrt()">AddToCart >></button></p>

<?php 
}
else 
{
?>

<button type="submit" name="addtocart" class="btn btn-success text-white btn-lg">AddToCart >></button></p>

<?php 
}
?>
<p class="">
    <label class="fs-3">Products Descriptions</p>
    <hr />
    <p><?php echo $shwprod[0]["descriptions"];?></p>   
</p>
</div>

</form>

</div>
</div>
</div>

<script>
  function addcrt()
  {
    alert('Want to add product in Cart Login First ?')
    window.location='./create-account';
  }
</script>


