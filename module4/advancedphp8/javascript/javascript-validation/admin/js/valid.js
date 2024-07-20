function valid()
{
    if(document.frm.email.value=="")
    {
        alert('Please Enter your email')
        document.frm.email.focus();
        return false;
    }
    var em=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(!em.test(document.frm.email.value))
    {
        alert('Please Enter your valid email address')
        document.frm.email.focus();
        return false; 
    }

    if(document.frm.password.value=="")
    {
        alert('Please Enter your Password')
        document.frm.password.focus();
        return false;
    }

    var pwd=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;;
    if(!pwd.test(document.frm.password.value))
        {
            alert('Please Enter Password with 6-16 character and One special character accept')
            document.frm.password.focus();
            return false; 
        }
}