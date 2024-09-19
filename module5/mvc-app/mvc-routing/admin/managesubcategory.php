
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Manage All SubCategories <span class="bi bi-person"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<table class="table table-responsive">
<thead>
<tr>
<th>#</th>
<th>Category Name</th>
<th>SubCategory Name</th>
<th>Descriptions</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
foreach($shwsubcategory as $row)
{
?>
<tr>
<td><?php echo $row["subcategory_id"];?></td>
<td><?php echo $row["category_name"];?></td>
<td><?php echo $row["subcategory_name"];?></td>
<td><?php echo $row["subcategory_descriptions"];?></td>
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