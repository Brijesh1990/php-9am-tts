<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php 
if(isset($_POST["login"]))
{
  $em=$_POST["email"];
  $pwd=$_POST["password"];
  if($em=='bkpandey@gmail.com' && $pwd=='b1234')
  {
    echo "<h3 align='center' style='color:green'>you are Logged in successfully</h3>";
    header("location:welcome.php");
  }

  else 
  {

    echo "<h3 align='center' style='color:red'>your email and password are Incorrect</h3>";
    header("refresh:3,login_refresh.php");
  }
  
}

?>


<div class="container p-5 w-50 mx-auto"> 
 <h1>Login Form</h1>   
<form method="post">
    <div class="form-group mt-4">
        <input type="text" name="email" placeholder="email *" class="form-control">
    </div>
    
    <div class="form-group mt-4">
        <input type="password" name="password" placeholder="password *" class="form-control">
    </div>

    
    <div class="form-group mt-4">
        <input type="submit" name="login" value="singIn" class="btn btn-md btn-primary bg-primary text-white">
    </div>
</form>    
</div>    
</body>
</html>