var myVar;
function mainFunction()
{
    // myVar=setTimeout(callbackfunction,3000);
    myVar=setTimeout("display()",3000);
}

function display()
{
    document.getElementById("loader").style='display:none';
    document.getElementById("main-section").style='display:block';
}

