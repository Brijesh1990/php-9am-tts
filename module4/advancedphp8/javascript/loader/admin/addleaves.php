<?php 
require_once("header.php");
require_once("sidebar.php");

?>
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Add Leaves <span class="bi bi-calendar"></span></h3>
<hr class="border border-2 border-primary ms-5 w-50">

<div class="col-md-12 ms-4 bg-white shadow p-4 mt-4">
<form>
<div class="form-group">
    <label class="fs-5 text-success">Select Employee</label>
    <select name="employee" class="form-control">
        <option value="">-select employee</option>
        <option value="">Brijesh Pandey</option>
    </select>
</div>
<div class="row">
<div class="form-group w-50 col-md-6 mt-3">
    <label class="fs-5 text-success">Asign Leave</label>
    <select name="leaves" class="form-control">
        <option value="">-select Leaves</option>
        <option value="">12</option>
        <option value="">22</option>
        <option value="">25</option>
    </select>
</div>

<div class="form-group w-50 col-md-6 mt-3">
    <label class="fs-5 text-success">Select departments</label>
    <select name="leaves" class="form-control">
        <option value="">-select Leaves</option>
        <option value="">12</option>
        <option value="">22</option>
        <option value="">25</option>
    </select>
</div>

</div>

<div class="form-group mt-3">
    <label class="fs-5 text-success">Leave Types</label>
    <select name="employee" class="form-control">
        <option value="">-select Leave type</option>
        <option value="">PL(Paid Leave)</option>
        <option value="">LWP(Leave without Paid)</option>
        <option value="">RH(Reasional  Leave)</option>
    </select>
</div>

<div class="form-group mt-3">
    <input type="submit" name="addleave" value="AddLeave" class="btn btn-md btn-primary bg-primary text-white">
    <input type="submit" name="reset" value="Reset" class="btn btn-md btn-danger bg-danger text-white ms-2">
</div>
</form>


</div>    
</div>
</div>   
</div>
</div>   
</div>
<?php 
require_once("footer.php");
?>