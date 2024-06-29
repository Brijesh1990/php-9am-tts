<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src='main.js'></script>
</head>
<body>
<?php 
//   download our brochures
if(isset($_POST["dwn"]))
{
$filepath='atmiya.pdf';
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.$filepath); 
readfile($filepath);
}
?>

<div class="container shadow p-4 mt-4 mx-auto">
<form method="post">

<button type="submit" name="dwn" class="w-50 mx-auto ms-5 btn-dark bg-dark text-white fs-3">Download Our brochures  <span class="bi bi-cloud-download"></span></button>

</form>    

</div>



</body>
</html>