<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function add()
        {
            // typecasting : parseInt(); parseFloat()

            var a=parseInt(prompt("Enter a values :"));   //string
            var b=parseInt(prompt("Enter b values :"));   //string
            var c=a+b;
            alert('Additions of numbers is :'+c);
        }
        function substract()
        {
            // typecasting : parseInt(); parseFloat()

            var a=parseInt(prompt("Enter a values :"));   //string
            var b=parseInt(prompt("Enter b values :"));   //string
            var c=a-b;
            alert('Substractions of numbers is :'+c);
        }
        function mult()
        {
            // typecasting : parseInt(); parseFloat()

            var a=parseInt(prompt("Enter a values :"));   //string
            var b=parseInt(prompt("Enter b values :"));   //string
            var c=a*b;
            alert('Multiplications of numbers is :'+c);
        }
        function dv()
        {
            // typecasting : parseInt(); parseFloat()

            var a=parseInt(prompt("Enter a values :"));   //string
            var b=parseInt(prompt("Enter b values :"));   //string
            var c=a/b;
            alert('Divisions of numbers is :'+c);
        }
    </script>

</head>
<body>

    <center>
        <button onclick="ad()">click to Add >></button>
        <button onclick="substract()">click to Substract >></button>
        <button onclick="mult()">click to Multiplications >></button>
        <button onclick="dv()">click to Divisions >></button>
    </center>
    
</body>
</html>