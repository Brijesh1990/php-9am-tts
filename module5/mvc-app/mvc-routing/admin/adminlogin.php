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
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/red.css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- bvalidator validations -->
 <!-- jquery bvalidator for validations -->
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script> 
<script src="<?php echo $baseurl;?>js/red.js"></script> 
<script>
$(document).ready(function(){
    $("#login").bValidator();
})
</script>
</head>
<body>
<!-- admin login -->
<div class="container-fluid">
<div class="container mt-5 w-75 mx-auto">
<div class="row">
<div class="col-md-6 shadow welcome-admin p-5">
<p class="text-center fs-1"><span class="bi bi-person-circle text-white">&nbsp;Welcome to Admin</span></p>
<p class="text-center text-white w-75 mx-auto"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, culpa iure, sapiente vitae minus dignissimos ipsa adipisci repellendus ullam voluptates officia magni veritatis suscipit distinctio. Eius esse enim aspernatur eaque!</p>
</div>
<div class="col-md-6 admin-login shadow p-5">
<p class="text-center"><img src="<?php echo $baseurl;?>images/users.png" class="img-fluid w-25"></p>
<form method="post" id="login">
<div class="form-group mt-2">
<input type="text" name="email" data-bvalidator="required,email" placeholder="email" class="form-control">
</div>
<div class="form-group mt-2">
<input type="password" name="password" data-bvalidator="required,minlen[4],maxlen[10]" placeholder="password" class="form-control">
</div>
<div class="form-group mt-2">
<input type="submit" name="login" value="Login"  class="btn btn-primary btn-sm">
<b><a href="">Forget Password ?</a></b>
</div>
</form>
</div>
</div>

</div>
</div>

</body>
</html>