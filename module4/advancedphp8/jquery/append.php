<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='https://code.jquery.com/jquery-3.7.1.js'></script>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
               

                $("b").append("<b>&nbsp;Pandey</b>")

            });
            
        })

        </script>
</head>
<body>
      <center> 
        <b>Brijesh</b>
        <br><br>
        <button type="button" id="btn1">Append surname</button>


      </center>
    
</body>