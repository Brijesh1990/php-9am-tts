<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
#slide img
{
    width: 100%;
    height:350px;
    margin-top:0%;
} 

 
</style>

<script src='https://code.jquery.com/jquery-3.7.1.js'></script>
<!-- slider plugins -->
<script src="https://malsup.github.io/jquery.cycle.all.js"></script> 

<script>
$(document).ready(function(){

    // $("#slide").cycle("turnLeft");
    // $("#slide").cycle("zoom");
    // $("#slide").cycle("turnRight");
    $("#slide").cycle("shuffle");

})

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

<!-- slider used here -->
<div class="container mt-5">
    <div id="slide">
        <img src="https://ps.w.org/ml-slider/assets/banner-1544x500.png?rev=2907610" class="img-fluid">
        <img src="https://soliloquywp.com/wp-content/uploads/2017/10/fullwidth-image-slider-in-wordpress.jpg" class="img-fluid">
        <img src="https://static8.depositphotos.com/1000939/923/i/450/depositphotos_9239571-stock-photo-hand-reaching-images-streaming-from.jpg" class="img-fluid">
    </div>
</div>
</body>