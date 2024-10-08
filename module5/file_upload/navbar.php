<?php 
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My first app in core php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
    
 <nav class="nav navbar navbar-expand-md bg-dark text-white">
    <a href="" class="navbar-brand ms-5">CRUD App in php</a>
    <ul class="navbar-link">
        <li><a href="index.php">Home</a></li>
        <li><a href="add-employee.php">AddEmployee</a></li>
       
       <?php 
        if(!isset($_SESSION["register_id"]))
        {
        ?>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <?php 
        }
        else 
        {
            ?>
       
       <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="contact.php">Welcome To :<?php echo ucfirst($_SESSION["fnm"]);?></a>
    
         <ul class="dropdown-menu bg-dark" style="min-width:280px !important">

         <li><a href="dashboard.php">Manage Profile</a></li>
    
         <li><a href="contact.php">Change Password</a></li>
    
         <li><a href="contact.php">Manage Notifications</a></li>
    
         <li><a href="logout.php" class="btn btn-md btn-danger text-white">Logout ?</a></li>
    

         </ul>
    
        </li>
        <?php 
        }
        ?>
       <li><a href="contact.php">Contact</a></li>
    
    </ul>
 </nav>   


</body>
</html>