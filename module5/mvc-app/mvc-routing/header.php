<?php 
$mainurl="http://localhost/php-9am-tts/module5/mvc-app/mvc-routing/";
$baseurl="http://localhost/php-9am-tts/module5/mvc-app/mvc-routing/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Navbar</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/gray.css'>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="<?php echo $baseurl;?>js/main.js"></script>
<!-- jquery bvalidator for validations -->
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script> 

</head>
<body>
<div class="container-fluid p-5">
<div class="row">
<div class="col-md-3">Call Now <span class="bi bi-telephone"></span> (+91)-998003879</div>
<div class="col-md-6">
<div class="input-group">
<input type="text" name="search" placeholder="search anything here........." class="form-control">
<button type="button" class="btn btn-sm btn-dark bg-dark text-white"><span class="bi bi-search"></span></button>
</div>
</div>
<div class="col-md-3 mt-1">

<button type="button" class="btn btn-sm btn-dark text-white ms-4"><Span class="bi bi-cart">&nbsp<Span class="badge badge-sm bg-danger text-white"><?php echo $carttotal[0]["total_count"];?></Span></button>
<span class="bi bi-facebook fs-4"></span>
<span class="bi bi-instagram fs-4"></span>
<span class="bi bi-google fs-4"></span>
</div>
</div>    


</div> 