
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Add Products <span class="bi bi-calendar"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<form>

<div class="form-group">
    <label class="fs-5 text-success">Select Category</label>
    <select name="category" class="form-control">
        <option value="">-select category</option>
        <option value="">Shoes</option>
    </select>
</div>

<div class="form-group">
    <label class="fs-5 text-success">Select SubCategory</label>
    <select name="subcategory" class="form-control">
        <option value="">-select Subcategory</option>
        <option value="">Mens Shoes</option>
    </select>
</div>

<div class="form-group mt-3">
<input type="text" placeholder="Enter Product Name *" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="file" placeholder="Enter Product Photo *" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="text" placeholder="Enter Product qty *" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="text" placeholder="Enter Product Old Price *" class="form-control"/>
</div>


<div class="form-group mt-3">
<input type="text" placeholder="Enter Product New Price *" class="form-control"/>
</div>


<div class="form-group mt-3">
<textarea  placeholder="Enter Product descriptions *" class="form-control"></textarea>
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