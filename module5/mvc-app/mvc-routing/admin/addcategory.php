<!-- bvalidator validations -->
<script>
$(document).ready(function(){
    $("#category").bValidator();
})
</script>
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Add Category <span class="bi bi-calendar"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<form method="post" id="category" class="w-50">
<div class="form-group mt-3">
<input type="text" placeholder="Enter Category *" data-bvalidator="required" class="form-control"/>
</div>
<div class="form-group mt-3">
<textarea  placeholder="Enter Category descriptions *" data-bvalidator="required" class="form-control"></textarea>
</div>
<div class="form-group mt-3">
<input type="submit" name="addcategory" value="AddCategory" class="btn btn-md btn-primary bg-primary text-white">
<input type="submit" name="reset" value="Reset" class="btn btn-md btn-danger bg-danger text-white ms-2">
</div>
</form>
</div>    
</div>
</div>   
</div>
</div>   
</div>