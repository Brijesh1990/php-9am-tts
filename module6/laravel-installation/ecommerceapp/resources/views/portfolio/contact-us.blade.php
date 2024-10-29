@extends('portfolio.master')
@section('title_here')
Contact with Us page
@endsection
@section('content')
<!-- Brijesh Portfolio content section -->
<section id="portfolio-content">
<div class="contact-us">
<h1> Contact  Us </h1>
<hr> 
<form>
<fieldset>
<legend align="center">Contact Us</legend>
<input type="text" name="fname" placeholder="FirstName *" />
<br><br>
<input type="text" name="email" placeholder="Email *" />
<br><br>
<input type="text" name="Phone" placeholder="Phone *" />
<br><br>
<input type="text" name="subject" placeholder="Subject *" />
<br><br>
<textarea  name="message" placeholder="Message *"></textarea>
<br><br>
<input type="submit" name="sub" value="Send" >
</fieldset>
</form>
</div>

<!-- download resume now  -->
<div class="download-resume">  
<h1> Download Our resume here <span class="fa fas fa-arrow-circle-down"></span> </h1>
<h3 align="center">Click for download My Resume ☛ : <a href="pdf/brijesh-2.pdf" download="download">Download now</a></h3>
<hr> 
</div>
</section>
@endsection