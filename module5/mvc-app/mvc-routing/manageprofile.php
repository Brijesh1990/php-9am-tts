<!-- content -->

<div class="container p-5 mt-5 shadow">

<div class="row">
<div class="col-md-5 mt-5">
<ul class="sidebar-links">
<li><a href="<?php echo $mainurl;?>manageprofile">Manage Profile <Span class="bi bi-person"></Span></a></li>
<li><a href="<?php echo $mainurl;?>manageorder">Manage Order <Span class="bi bi-truck"></Span></a></li>
<li><a href="<?php echo $mainurl;?>changepassword">Change Password <Span class="bi bi-lock"></Span></a></li>
<li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger text-white">Logout  <Span class="bi bi-power"></Span></a></li>
</ul>

</div>
<div class="col-md-6">
<h1>Manage Profile</h1>
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quod atque aperiam odit eaque animi, blanditiis minus eum rem tempore! Vero porro totam quod soluta voluptatibus mollitia aliquid, unde hic?</p>
<form method="post" enctype="multipart/form-data">
<div class="form-group mt-3">
<input type="text" name="email" placeholder="Email *" value="<?php echo $shwprofile[0]["email"];?>" class="form-control">
</div>
<div class="form-group mt-3">
<input type="text" name="name" placeholder="Name *"  value="<?php echo $shwprofile[0]["name"];?>"  class="form-control">
</div>

<div class="form-group mt-3">
<select name="country" class="form-control">
<option value="">-select country-</option>
<?php 
foreach($country as $country1)
{
?>
<option value="<?php echo $country1["cid"];?>"><?php echo $country1["countryname"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<select name="state" class="form-control">
<option value="">-select state-</option>
<?php 
foreach($state as $state1)
{
?>
<option value="<?php echo $state1["sid"];?>"><?php echo $state1["statename"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<select name="city" class="form-control">
<option value="">-select city-</option>
<?php 
foreach($city as $city1)
{
?>
<option value="<?php echo $city1["ctid"];?>"><?php echo $city1["cityname"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-froup mt-3">
<textarea name="address" class="form-control" placeholder="Address *"><?php echo $shwprofile[0]["address"];?> </textarea>
</div>

<div class="form-group mt-3">
<input type="text" name="mobile" placeholder="Phone *"  value="<?php echo $shwprofile[0]["phone"];?>"  class="form-control">
</div>
<div class="form-froup mt-3">
<input type="submit" name="updprofile" value="Update Profile" class="btn btn-sm btn-dark text-white" >

</div>

</form>
</div>
</div>

</div>

