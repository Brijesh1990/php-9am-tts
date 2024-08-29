<?php 
if(!isset($_SESSION["admin_id"]))
{
    echo "<script>
    window.location='./';
    </script>";  
}
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

<script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

var data = google.visualization.arrayToDataTable([
['City', '2010 Population',],
['New York City, NY', 8175000],
['Los Angeles, CA', 3792000],
['Chicago, IL', 2695000],
['Houston, TX', 2099000],
['Philadelphia, PA', 1526000]
]);

var options = {
title: 'Population of Largest U.S. Cities',
chartArea: {width: '60%', height :'300'},
hAxis: {
title: 'Total Population',
minValue: 0
},
vAxis: {
title: 'City'
}
};

var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

chart.draw(data, options);
}
</script>
