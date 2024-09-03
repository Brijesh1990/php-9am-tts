
<!-- navbar -->
<nav class="nav navbar navbar-expand-md bg-dark p-2">
<a href="" class="navbar-brand ms-5 text-white fs-3"><span class="text-info">Am</span>rin<span class="text-info">Sh</span>oes Corn<span class="text-info">er</span></a>
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