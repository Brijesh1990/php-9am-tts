var myVar;
// main function 
function mainFunction()
{
    // myVar=setTimeout(callbackfunction,time);
     myVar=setTimeout("display()",2000);
    
}
function display()
{
    document.getElementById("loader").style="display:none";
    document.getElementById("mainContent").style="display:block";
}
