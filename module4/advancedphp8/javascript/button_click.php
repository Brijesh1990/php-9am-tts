<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function display()
        {
            // typecasting : parseInt(); parseFloat()

            var a=parseInt(prompt("Enter a values :"));   //string
            var b=parseInt(prompt("Enter b values :"));   //string
            var c=a+b;
            alert('Additions of numbers is :'+c);
        }
    </script>

</head>
<body>

    <center>
        <button onclick="display()">click to Add >></button>
    </center>
    
</body>
</html>