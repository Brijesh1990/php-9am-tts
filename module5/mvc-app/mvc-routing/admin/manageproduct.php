<script>
$(document).ready(function(){
    new DataTable('#shwprod');
})
</script>    
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Manage All Products <span class="bi bi-person"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<table class="table table-responsive" id="shwprod">
<thead>
<tr>
<th>Category Name</th>
<th>SubCategory Name</th>
<th>Pname</th>
<th>PPhoto</th>
<th>Qty</th>
<th>OldPrice</th>
<th>NewPrice</th>
<th>Descriptions</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
foreach($shwproducts as $row)
{
?>
<tr>
<td><?php echo $row["category_name"];?></td>
<td><?php echo $row["subcategory_name"];?></td>
<td><?php echo $row["productname"];?></td>
<td><img src="<?php echo $row["photo"];?>" class="img-fluid w-50"></td>
<td><?php echo $row["qty"];?></td>
<td><?php echo $row["oldprice"];?></td>
<td><?php echo $row["newprice"];?></td>
<td><div style="width:150px; height:100px; overflow:auto"><?php echo $row["descriptions"];?></div></td>
<td><div style="min-width: 80px;"><a href=""><span class="bi bi-pencil text-success fs-2"></span></a> |
<a href=""><span class="bi bi-trash text-danger fs-2"></span></a>
</div>
</td>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>    
</div>
</div>   
</div>
</div>   
</div>