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
            $("#btn").click(function(){
                // alert('Hi i am click on button')
                // var nm=prompt("Please enter your name :");
                // alert('my name is :'+nm)

                var age=12;
                var res=age>=18?'I am eleigible for voting':'i am not eleigible for voting';
                alert(res);

            })
        })
    </script>
</head>
<body>

    <center>
        <button type="button" id="btn">Click Me >></button>
    </center>
</body>
</html>