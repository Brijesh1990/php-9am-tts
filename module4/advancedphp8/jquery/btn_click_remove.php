<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src='https://code.jquery.com/jquery-3.7.1.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function(){
$("#btn1").click(function(){
$("table").append("<tr><td>1002</td><td>Maulik</td><td>Maulik</td><td>Ranpara</td><td>Male</td><td>22</td> <td><a href='' class='btn btn-sm btn-danger text-white'>Delete</td></tr>");
});


$("#del").click(function(){

$("#deldata").remove();


});    


})

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

<div class="w-75 p-5 mt-5 mx-auto shadow">
<p>Click for append rows in tables <button type="button" id="btn1" class="btn btn-md btn-primary text-white fs-4 float-end">+</button></p>    
<table class="table table-resposnive mt-4"  id='deldata'>
<tr>
<th>#id</th>
<th>Name</th>
<th>Fname</th>
<th>LName</th>
<th>Age</th>
<th>Gender</th>
<th>Action</th>

</tr>
<tr>
<td>1001</td>
<td>Brijesh</td>
<td>Brijesh</td>
<td>Pandey</td>
<td>35</td>
<td>Male</td>
<td><a href="#" class="btn btn-sm btn-danger text-white" id="del">Delete</td>
</tr>
</table>

</div>

</body>