<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Online Brijesh kumar Pandey Portfolio |  Mean stack developer | Fullstack developer ::@yield('title_here')</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href="{{ asset('assets/portfolio/css/style.css')}}">
<link rel='stylesheet' type='text/css' media='screen' href="{{ asset('assets/portfolio/fonts/font-awesome.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src='main.js'></script>
</head>
<body>
<!-- Brijesh Portfolio Header section -->
<section id="portfolio-header">
<div class="logo">
<h1><a href="/" style="color:white">Brijesh kumar pandey<a/></h1>
</div> 
<div class="navbar">
<ul>
<li><a href="#portfolio-content">Portfolio</a></li>
<li><a href="#about-us">about</a></li>
<li><a href="/contact-us">contact</a></li>
<li><a href="#">download my cv</a></li>
</ul>
</div>   
</section>

<!-- brijesh portfolio content here -->
@yield('content')

<!-- Brijesh Portfolio Footer section -->
<section id="portfolio-footer"> 
<div class="location">
<h1>Location</h1>
<p>Tops Technologies Pvt.Ltd <br>
Naptune Tower 4th floor kalawad Main Road ,Rajkot.
360001</p>
</div>
</div>
<div class="arround">
<h1>Arround the web</h1>
<p>Facebook | Twiiter | instagram</p>
</div>
<div class="contact">
<h1>Contact</h1>
<p>+91 9173357217 or <br>do u like my job? contact me.
</p>
</div>
</section>
</body>
</html>
