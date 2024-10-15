<?php
$MERCHANT_KEY = "FH2qsrBv";
$SALT = "StCMXYEpZ3";
// Merchant Key and Salt as provided by Payu.
$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode
$action = '';
$posted = array();
if(!empty($_POST)) {
//print_r($_POST);
foreach($_POST as $key => $value) {    
$posted[$key] = $value; 

}
}
$formError = 0;
if(empty($posted['txnid'])) {
// Generate random transaction id
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
$txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
if(
empty($posted['key'])
|| empty($posted['txnid'])
|| empty($posted['amount'])
|| empty($posted['firstname'])
|| empty($posted['email'])
|| empty($posted['phone'])
|| empty($posted['productinfo'])
|| empty($posted['surl'])
|| empty($posted['furl'])
|| empty($posted['service_provider'])
) {
$formError = 1;
} else {
//$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
$hashVarsSeq = explode('|', $hashSequence);
$hash_string = '';	
foreach($hashVarsSeq as $hash_var) {
$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
$hash_string .= '|';
}

$hash_string .= $SALT;


$hash = strtolower(hash('sha512', $hash_string));
$action = $PAYU_BASE_URL . '/_payment';
}
} elseif(!empty($posted['hash'])) {
$hash = $posted['hash'];
$action = $PAYU_BASE_URL . '/_payment';
}
?>


<script type="text/javascript">
var hash = '<?php echo $hash ?>';
function submitPayuForm() {
if(hash == '') {
return;
}
var payuForm = document.forms.payuForm;
payuForm.submit();
}
</script>    
<body onLoad="submitPayuForm()">

<!-- bvalidator validations -->
<script>
$(document).ready(function(){
$("#checkout").bValidator();
})
</script>
<!-- view cart -->
<div class="container p-5 mt-5 shadow">  
<div class="row">
<div class="col-md-7">
<h4>Please fill all details of customers for Product Deleivery</h3>

<form method="post" id="checkout" action="<?php echo $action; ?>" name="payuForm" enctype="multipart/form-data">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<div class="form-group mt-3">
<input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" placeholder="Enter Ammount *" />        
</div>    
<div class="form-group mt-3">
<input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Firstname *"  class="form-control">
</div>
<div class="form-group mt-3">
<input type="text" name="lname" value="<?php echo $shwprof[0]["lastname"];?>" placeholder="Lastname *" class="form-control">
</div>
<div class="form-group mt-3">
<input type="text" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email *" class="form-control">
</div>
<div class="form-group mt-3">
<input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Mobile *"  class="form-control">
</div>
<div class="form-group mt-3">
<textarea name="productinfo" class="form-control" placeholder="Product Info *"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>

</div>
<!-- payment success url -->
<input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" />
<!-- payment failure url -->
<input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" />

<div class="form-group mt-3">
<input type="text" name="name" placeholder="Name *" data-bvalidator="required,alpha" value="<?php echo $shwprofile[0]["name"];?>" class="form-control">
</div>


<div class="form-froup mt-3">
<textarea name="address" class="form-control" placeholder="Address *" data-bvalidator="required"><?php echo $shwprofile[0]["address"];?></textarea>
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



<div class="form-group mt-3">

<?php if(!$hash) { ?>    
<button type="submit" class="btn btn-lg btn-dark text-white">Go For Online Payments >> </button>
<?php } ?>
</div>
</form>   
</div>
<div class="col-md-5">
<h4>Total Items in Cart<span class="badge bg-danger text-white ms-2"><?php echo $carttotal[0]["total_count"];?></span></h4>
<hr />
<!-- view cart here -->
<table class="table table-responsive">
<?php 
foreach($shwcrt as $row)
{
?>
<tr>  
<td><img src="admin/<?php echo $row["photo"];?>" style="width:55px; height:55px"></td>  
<td><?php echo $row["productname"];?></td>   
<td><?php echo $row["subtotal"];?></td>       
</tr>
<?php 
}
?>
<!-- subtotal of cart -->
<tr  class="bg-dark text-white mt-3 fs-2">
<td align="right" colspan="7" class="mt-4">Subtotal of Products is Rs. <?php echo $subtotal[0]['sum_total'];?></td>
</tr>

</table>
</div>
</div>

</div>



