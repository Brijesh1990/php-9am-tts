<!-- bvalidator validations -->
<script>
$(document).ready(function(){
    $("#product").bValidator();
})
</script>
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Add Products <span class="bi bi-calendar"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<form method="post" class="w-50"  id="product">

<div class="form-group">
    <label class="fs-5 text-success">Select Category</label>
    <select name="category" class="form-control" data-bvalidator="required">
        <option value="">-select category</option>
        <option value="">Shoes</option>
    </select>
</div>

<div class="form-group">
    <label class="fs-5 text-success">Select SubCategory</label>
    <select name="subcategory" class="form-control" data-bvalidator="required">
        <option value="">-select Subcategory</option>
        <option value="">Mens Shoes</option>
    </select>
</div>

<div class="form-group mt-3">
<input type="text" placeholder="Enter Product Name *" class="form-control" data-bvalidator="required"/>
</div>


<div class="form-group mt-3">
<input type="file" placeholder="Enter Product Photo *" data-bvalidator="required" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="text" placeholder="Enter Product qty *" data-bvalidator="required,minlen[1],maxlen[1000]" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="text" placeholder="Enter Product Old Price *" data-bvalidator="required" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="text" placeholder="Enter Product New Price *" data-bvalidator="required" class="form-control"/>
</div>


<div class="form-group mt-3">
<textarea  placeholder="Enter Product descriptions *" data-bvalidator="required" class="form-control"></textarea>
</div>



<div class="form-group mt-3">
    <input type="submit" name="addproducts" value="AddProducts" class="btn btn-md btn-primary bg-primary text-white">
    <input type="submit" name="reset" value="Reset" class="btn btn-md btn-danger bg-danger text-white ms-2">
</div>
</form>


</div>    
</div>
</div>   
</div>
</div>   
</div>