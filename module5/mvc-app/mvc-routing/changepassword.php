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
<h1>Change Your Password</h1>
<form method="post" enctype="multipart/form-data">
<div class="form-group mt-3">
<input type="password" name="opass" placeholder="Old Password *" class="form-control">
</div>
<div class="form-group mt-3">
<input type="password" name="npass" placeholder="New Password *" class="form-control">
</div>

<div class="form-group mt-3">
<input type="password" name="cpass" placeholder="Confirm Password *" class="form-control">
</div>

<div class="form-group mt-3">
<input type="submit" name="change-pass" value="Submit" class="btn btn-sm btn-dark text-white" >
</div>
</form>
</div>
</div>

</div>

