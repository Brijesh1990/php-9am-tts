<!-- Amrine shoes corner -->
<div class="container-fluid p-5 mt-5 shadow">
<div class="row">
<div class="col-md-4 sidebar-links">
<h4 class="bg-dark p-2 text-white">select Category</h4>
<ul>
<li><a href="<?php echo $mainurl;?>"> Home</a></li>
<?php
foreach($shwcategory as  $shwcategory1) 
{
?>
<li><a href="<?php echo $mainurl;?>allproducts?categoryid=<?php echo $shwcategory1["category_id"];?>"><?php echo $shwcategory1["category_name"];?></a></li>
<?php 
}
?>
</ul>
<p><img src="https://hellosubscription.com/wp-content/uploads/2018/11/17091500/50-OFF_gif_1.gif?resize=800%2C500&quality=93&strip=all?fit=30%2C19&quality=93&strip=all" class="img-fluid m-0 p-0" /></a></p>

<p class="mt-3"><img src="https://cdn.dribbble.com/users/179156/screenshots/11049577/media/dd80069e52d25505b405c0dafe15a9b4.gif" class="img-fluid m-0 p-0" /></a></p>

<p class="mt-3"><img src="https://tahviehpars.com/wp-content/uploads/2020/02/giphy.gif" class="img-fluid m-0 p-0" /></a></p>
</div>
<div class="col-md-8">
<h3>50% off on selected Items Hurry Up Now >></h3>
<hr />
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quod atque aperiam odit eaque animi, blanditiis minus eum rem tempore! Vero porro totam quod soluta voluptatibus mollitia aliquid, unde hic?</p>

<!-- all products load here -->
<div class="row">
<!-- fetch  products selected via category here uploaded via admin -->
 <?php
 foreach($shwprod as $row)
 { 
 ?>
<div class="col-md-6">
<p class="text-center"><img src="admin/<?php echo $row["photo"];?>" class="img-fluid" style="width: 70%; height: 300px;" /></p>
<p class="text-center fs-4"><?php echo $row["productname"];?></p>
<p class="text-center">Rs. <del><?php echo $row["oldprice"];?></del><?php echo $row["newprice"];?> -/</p>
<p class="text-center"><a href="<?php echo $mainurl;?>productdetails?productid=<?php echo $row["product_id"];?>"><button type="button" class="btn btn-dark text-white btn-sm">Click For Details >></button></a></p>    
</div>
<?php 
 }
 ?>
</div>
</div>
</div>
</div>

