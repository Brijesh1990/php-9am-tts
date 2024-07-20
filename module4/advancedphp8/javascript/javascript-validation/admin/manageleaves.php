<?php 
require_once("header.php");
require_once("sidebar.php");

?>
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Manage Leaves <span class="bi bi-calendar"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">
<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
 <table class="table table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Employeename</th>
            <th>Leaves</th>
            <th>Department Name</th>
            <th>Leave Types</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1001</td>
            <td>Nupur patel</td>
            <td>12</td>
            <td>CSE</td>
            <td>PL</td>
            <td><div style="min-width: 80px;"><a href=""><span class="bi bi-whatsapp text-success fs-2"></span></a>
                <a href=""><span class="bi bi-trash text-danger fs-2"></span></a>
                </div>
            </td>
        </tr>

    </tbody>
 </table>
</div>    
</div>
</div>   
</div>
</div>   
</div>
<?php 
require_once("footer.php");
?>