<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
    if(isset($_POST["sub"]))
    {
        $unm=$_POST["uname"];
        echo $unm;
    }

    ?>
    <form method="post">

        Enter username :<input type="text" name="uname" placeholder="UserName *" />
        <br><br>
        <input type="submit" name="sub" value="Submit">

    </form>
    
</body>
</html>
