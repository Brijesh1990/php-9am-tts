<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/gray.css">
<style>
#slide img
{
    width: 100%;
    height:350px;
    margin-top:0%;
} 
</style>
<script src='https://code.jquery.com/jquery-3.7.1.js'></script>
<script src='js/jquery.bvalidator.min.js'></script>
<script src='js/default.min.js'></script>
<script src='js/gray.js'></script>
<script>
$(document).ready(function(){

    $("#frm").bValidator();

})

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

<!-- Jquery validations -->
<div class="container mt-5 shadow p-5 w-50 mx-auto">

<form method="post" action="thanks.php" id="frm">
<h4 class="text-center">Contact Form</h5>    
<div class="form-group mt-3 w-50 mx-auto">
    <input type="text" name="name" placeholder="Name *" class="form-control" data-bvalidator="required,alpha" />
</div>  
<div class="form-group mt-3 w-50 mx-auto">
    <input type="text" name="email" placeholder="Email *" class="form-control" data-bvalidator="required,email" />
</div>  
<div class="form-group mt-3 w-50 mx-auto">
    <input type="text" name="phone" placeholder="Phone *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit" />
</div>  
<div class="form-group mt-3 w-50 mx-auto">
    <input type="text" name="subject" placeholder="Subject *" class="form-control" data-bvalidator="required" />
</div>  
<div class="form-group mt-3 w-50 mx-auto">
    <textarea name="message" placeholder="Message *" class="form-control" data-bvalidator="required"></textarea>
</div>  
<div class="form-group mt-3 w-50 mx-auto">
    <input type="submit"  class="btn btn-dark text-white" value="Send" />
</div>   
</form>   
</div>
</body>