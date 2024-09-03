<!-- bvalidator validations -->
<script>
$(document).ready(function(){
    $("#subcategory").bValidator();
})
</script>
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Add SubCategory <span class="bi bi-calendar"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<form method="post" id="subcategory" class="w-50">

<div class="form-group">
    <label class="fs-5 text-success">Select Category</label>
    <select name="categoryname" class="form-control" data-bvalidator="required">
        <option value="">-select category</option>
        <?php
        foreach($shwcategory as $row)
        { 
        ?>
        <option value="<?php echo $row["category_id"];?>"><?php echo $row["category_name"];?></option>
        <?php 
        }
        ?>
    </select>
</div>

<div class="form-group mt-3">
<input type="text" name="subcategoryname" placeholder="Enter SubCategory Name *" data-bvalidator="required,alpha" class="form-control"/>
</div>


<div class="form-group mt-3">
<textarea name="subcategorydesc"  placeholder="Enter SubCategory descriptions *" data-bvalidator="required" class="form-control"></textarea>
</div>



<div class="form-group mt-3">
    <input type="submit" name="addsubcategory" value="AddSubCategory" class="btn btn-md btn-primary bg-primary text-white">
    <input type="submit" name="reset" value="Reset" class="btn btn-md btn-danger bg-danger text-white ms-2">
</div>
</form>


</div>    
</div>
</div>   
</div>
</div>   
</div>