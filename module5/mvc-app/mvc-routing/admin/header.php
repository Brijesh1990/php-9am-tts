<?php 
$mainurl="http://localhost/php-9am-tts/module5/mvc-app/mvc-routing/admin/";
$baseurl="http://localhost/php-9am-tts/module5/mvc-app/mvc-routing/admin/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/gray.css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- jquery bvalidator for validations -->
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script> 

</head>
<body class="dashboard">
<!-- header -->
<div class="container-fluid p-3 admin-header">
<div class="row">
<div class="col-md-5">
<h3 class="text-white ">SRMS Admin</h3>
</div>
<div class="col-md-7">
<h6 class="text-white fs-5"><span class="bi bi-person text-white"></span> welcome:<?php echo $_SESSION["email"]; ?> &nbsp; <span class="bi bi-calendar"></span> &nbsp; <?php echo date("l j Y");?> &nbsp; <a href="<?php echo $mainurl;?>?logout-here"><button type="button" class="btn btn-sm btn-danger bg-danger ms-5" onclick="return confirm('Are you sure to logout as Admin ?')">Logout <span class="bi bi-power text-white"></span></button></a></h6>
</div>
</div>
</div>
<div class="admin-bottom-header shadow p-3">
<div class="row">
<div class="col-md-4">    
<h6><a href="dashboard.html"><span class="ms-5 bi bi-speedometer"></span> &nbsp;Dashboard</a></h6>
</div>
<div class="col-md-8">
<input type="text" placeholder="search here anything....." class="form-control ms-0 w-75">
</div>
</div>
</div>
