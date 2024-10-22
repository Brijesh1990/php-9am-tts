<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Laravel first page load via routing</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- stylesheet here -->
 <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" />
<script src='main.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/calc.js')}}"></script>

</head>
<body>

    <div class="container w-75 mx-auto shadow mt-5 p-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('assets/images/contact.png')}}" class="img-fluid" />
            </div>
            <div class="col-md-8">
                <h1>Welcome to Contact us Form</h1>
                <hr>
                <div class="form-group">
                    <input type="text" name="fname" placeholder="FirstName *"  class="form-control"/>
                </div>
        
                <div class="form-group mt-4">
                    <input type="submit" name="send" class="btn btn-lg btn-dark text-white" placeholder="FirstName *" value="Send" />
                </div>
        
            </div>
        </div>

        <div class="w-100 p-4 mx-auto">
        <h2 class="ms-5">Calculate Here</h2>
        <hr  class="ms-5"/>
        <button type="button" class="ms-5 btn btn-sm btn-dark text-white fs-3" onclick="ad()">Addition</button>
        <button type="button" class="ms-5 btn btn-sm btn-dark text-white fs-3" onclick="dv()">Divisions</button>
        <button type="button" class="ms-5 btn btn-sm btn-dark text-white fs-3">Substractions</button>
        <button type="button" class="ms-5 btn btn-sm btn-dark text-white fs-3">Multiplication</button>
        </div>
        </div>
</body>
</html>