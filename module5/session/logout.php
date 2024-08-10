<?php 
session_start();
unset($_SESSION["register_id"]);
unset($_SESSION["fnm"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You are Logout Successfully')
window.location='login.php';
</script>";

?>