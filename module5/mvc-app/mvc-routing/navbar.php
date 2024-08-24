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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>
    <!-- navbar -->
   <nav class="nav navbar navbar-expand-md bg-dark p-2">
    <a href="" class="navbar-brand ms-5 text-white">Flipkart App</a>
    <!-- navbar -->
 
        <button type="button" class="btn btn-sm navbar-toggler" data-bs-toggle="collapse" data-bs-target="#coll">
        <span class="bi bi-grid text-white fs-4"></span>
        </button>
    <!-- collapse -->
    <div class="collapse navbar-collapse" id="coll">
    <ul>
        <li><a href="<?php echo $mainurl;?>"><span class="bi bi-house"></span> Home</a></li>
        <li><a href="<?php echo $mainurl;?>about-us">About</a></li>
        <li><a href="<?php echo $mainurl;?>our-gallery">Gallery</a></li>
        <li><a href="<?php echo $mainurl;?>feedback">Feedback</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Account <Span class="bi bi-person"></Span></a>
        <ul class="dropdown-menu bg-dark">
            <li><a href="<?php echo $mainurl;?>create-account">Register <Span class="bi bi-person"></Span></a></li>
            <li><a href="#">Login <Span class="bi bi-person"></Span></a></li>
        </ul>
        </li>
        <li><a href="<?php echo $mainurl;?>contact-us">Contact</a></li>
    </ul>
    </div>
   </nav>

</body>
</html>