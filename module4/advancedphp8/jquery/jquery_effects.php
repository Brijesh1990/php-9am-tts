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
              
                //  $("#demo").hide();
                // $("#demo").hide("slow");
                $("#demo").hide(3500);

            })
            $("#btn2").click(function(){
              
              //  $("#demo").hide();
              // $("#demo").hide("slow");
              $("#demo").show(3500);

          })
          $("#btn3").click(function(){
              
              //  $("#demo").hide();
              // $("#demo").hide("slow");
              $("#demo").toggle(350);

          })
        })
    </script>
</head>
<body>

    <center>
        <p id="demo"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates placeat nesciunt doloribus, quidem maxime delectus similique nulla id totam debitis sequi corrupti et consectetur rem labore. Culpa impedit doloribus rerum!</p>
        <button type="button" id="btn1">Hide</button>
        <button type="button" id="btn2">Show</button>
        <button type="button" id="btn3">Toggle</button>
    </center>
</body>
</html>