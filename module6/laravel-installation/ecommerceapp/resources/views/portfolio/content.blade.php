@extends('portfolio.master')
@section('title_here')
Home page
@endsection
@section('content')

<!-- Brijesh Portfolio slider section -->
<section id="portfolio-hero-section">
<div class="slider-txt">
<img src="{{ asset('assets/portfolio/images/brijesh.jpg')}}" />    
<h1> Brijesh Pandey </h1>
<hr>
<p>Web Developer - Graphic Artist - User Experience - Designer-Web Designer</p>
</h1>
</div>  
</section>

<!-- Brijesh Portfolio content section -->
<section id="portfolio-content">
<div class="portfolio">    
<h1> Portfolio </h1>
<hr>
<img src="{{ asset('assets/portfolio/images/1.jpg')}}" />

</div>   
<div class="photoshop">
<h1> Photoshop </h1>
<hr>
<img src="{{ asset('assets/portfolio/images/3.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/4.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/6.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/8.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/6.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/8.jpg')}}" />   
</div>
<div class="photoshop">
<h1> Illustrations </h1>
<hr>
<img src="{{ asset('assets/portfolio/images/bat man final.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/GL.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/NH.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/study.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/NH.jpg')}}" />
<img src="{{ asset('assets/portfolio/images/GL.jpg')}}" />   
</div>
<div class="about-us" id="about-us">
<div class="about-txt">
<h1> About Us </h1>
<hr> 
<p>Brijesh Pandey is a INDIA based designer specialising in Web Developement,Web Designing,Web/UI Design, Graphic Design, Branding, Illustration & Photography. He has a worldwide client roster and his work is regulary featured in design related publications. Brijesh Pandey is also a regular speaker at design/tech conferences.
</p>
</div>

<div class="technical-skills">
<div class="about-txt">
<h1> Technical-skills  </h1>
<hr> 
<label>php 80%</label>    
<progress style="width: 80%;" value="80" min="0" max="100"></progress>
<br><br>
<label>php 80%</label>    
<progress style="width: 80%;" value="80" min="0" max="100"></progress>
<br><br>
<label>php 80%</label>    
<progress style="width: 80%;" value="80" min="0" max="100"></progress>
<br><br>
<label>php 80%</label>    
<progress style="width: 80%;" value="80" min="0" max="100"></progress>
</div>
</div>
</div>

</section>
@endsection
