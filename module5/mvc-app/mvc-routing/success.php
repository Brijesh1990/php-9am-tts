<?php

// echo "<script>

//  window.location='PaymentSuccess';


// </script>";
?>


<!-- ecommerce Shoes viewcart start here -->
<div class="content" style="margin-top: 2%; margin-left:14%">
<div class="container mx-auto">
<div class="row">
<div class="col-md-12 col-xs-12">


<div class="col-md-10 col-xs-12 col-md-offset-1">
<div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px; height: 550px;">
<center>
<div class="card-heading"><h2 style="color:red">Payment Status </h2></div>
<div class="card-body">



<h2 style="font-size:30px; letter-spacing:2px; color:green">Thanks for Payment with TrendzShop </h2> 
<hr style="border:red solid 3px">


<center>
<img src="https://www.architecturaldigest.in/wp-content/themes/cntraveller/images/check-circle.gif" style="width: 250px; height: 200px;">
</center>

<?php
$custid=$_SESSION["customer_id"];
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {


$custid=$_SESSION["customer_id"];
$additionalCharges=$_POST["additionalCharges"];
$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
} else {
$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
$hash = hash("sha512", $retHashSeq);
if ($hash != $posted_hash) {
echo "<h3 style='color:green'>Thank You. Your order status is ". $status .".</h3>";
echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
echo "<h4 style='color:#136900; font-size:24px'>We have received a payment of Rs. " ."<b style='color:red'>". $amount ."</b>". ". Your order will soon be shipped.</h4>";
} else {
echo "<h3>Thank You. Your order status is ". $status .".</h3>";
echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
}
?>	

<center>
<a href="<?php echo $mainurl;?>PrintInvoice"><button type="button" class="btn btn-lg btn-danger" style="margin-left:1%" id="btn" onclick="pr()">Go For Print Bill <span class="fa fa-file-o"></span></button></a>

</center>

</div>

</div>

</div>

</div>
</div>
<div>
<div>
</div>
</div>

</div>

</div>
<div>
<div>
</div>

</div>


<script>
function pr()
{
    document.getElementById("btn").style="display:none";
    window.print();
}
</script>