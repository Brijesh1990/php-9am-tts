<?php
if(isset($_SESSION["customer_id"]))
{
    // echo "<script>
    
    //  window.location='PaymentFailure';
    
    
    // </script>";

?>


<!-- Trendz Shoes viewcart start here -->
<div class="content" style="margin-top: 2%; margin-left:14%">
<div class="container mx-auto">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="col-md-10 col-xs-12 col-md-offset-1">
<div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px; height: 450px;">
<center>
<div class="card-heading"><h2 style="color:red">Payment Status </h2></div>
<div class="card-body">
<h2 style="font-size:30px; letter-spacing:2px; color:red">Your Transactions is Failed Try Again </h2> 
<hr style="border:red solid 3px">
<center>
<img src="https://tppr.s3.eu-central-1.amazonaws.com/uploads/e46108d03ece178ea8b977aa068e7471.gif" style="width: 250px; height: 200px;">
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
	       echo "Invalid Transaction. Please try again";
		   } else {
         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
		 } 
?>




<center>
<a href="<?php echo $mainurl;?>"><button type="button" class="btn btn-block btn-danger" style="margin-left:0%; width: 60%;">Go on HomePage <span class="fa fa-file-o"></span></button></a>
</center>

</div>
</div>
</div>
<div>
<div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php
}
?>