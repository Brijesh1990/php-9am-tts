function signIn()
{
    var email=document.getElementById("email").value;
    var pass=document.getElementById("password").value;
    if(email=='admin@gmail.com' && pass=='admin123')
    {
      window.location='dashboard.php';
    }
    else 
    {
        Swal.fire({
            title: "Oh!",
            text: "Sorry your email and password are Incorrect try again ?",
            icon: "error"
          });
    }
    
}