<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

<?php 
function Add1()
{
echo "150 feet ring road rajkot";

}
function Add2()
{
echo "150 feet Near raiya  ring road rajkot";

}
function Add3()
{
echo "taigore road near <br>Atul Maruti suzuki showroom rajkot";
}


?>


<div class="container p-5 mt-5 shadow">
<div class="row">
<div class="col-md-5 ms-2 shadow p-4">
<?php Add1();?>
</div>
<div class="col-md-5 ms-4 shadow p-4">
<?php Add3();?>
</div>

<div class="col-md-5 ms-2 shadow p-4">
<?php Add2();?>
</div>
<div class="col-md-5 ms-4 shadow p-4">
<?php Add3();?>
</div>

</div>
</div>




</body>
</html>