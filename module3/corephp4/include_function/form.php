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
    //  include("odd_even_number.php");
    //  include("odd_even_number.php");
    //  include_once("odd_even_number.php");
    //  include_once("odd_even_number.php");

    // include_once("odd_even_number.php");
    //include_once("odd_even_numbere.php");
    
    
    // require("odd_even_number.php");
    
    // require("odd_even_number.php");
    

    // require_once("odd_even_number.php");
    // require_once("odd_even_number.php");

    require_once("odd_even_number.php");
    //require_once("odd_even_number.php");
    
     ?>
    
    <center>
        <form method="post">
            Enter Number :<input type="text" name="number" placeholder="Enter Number *" required />
            <br><br>
            <input type="submit" name="chk" value="Check" />
        </form>
    </center>
</body>
</html>