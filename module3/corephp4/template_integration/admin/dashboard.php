<?php 
require_once("header.php");
require_once("sidebar.php");

?>
<!-- dashboard -->
<div class="col-md-9 admin-dashboard">
<div class="container p-5">
<div class="row">
<h3 class="ms-4">Welcome to Admin Dashboard</h3>
<div class="col-md-3 ms-5 bg-danger p-4 mt-4">
  <h4 class="text-white">Total Employee</h4>
  <h2 class="text-center"><span class="badge badge-lg bg-white text-dark">10</span></h2>
</div>
<div class="col-md-3 ms-5 bg-primary p-4 mt-4">
  <h4 class="text-white">Total Contacts</h4>
  <h2 class="text-center"><span class="badge badge-lg bg-white text-dark">10</span></h2>
</div>
<div class="col-md-3 ms-5 bg-success p-4 mt-4">
  <h4 class="text-white">Total Feedback</h4>
  <h2 class="text-center"><span class="badge badge-lg bg-white text-dark">10</span></h2>
</div>
</div>

<!-- graph -->
<h3 class="ms-4 mt-5">Manage data</h3>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>
</div>   
</div>
</div>   
</div>

<?php 
require_once("footer.php");
?>