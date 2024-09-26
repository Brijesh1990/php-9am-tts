function subtotal()
{
    var price=document.getElementById("newprice").value;
    var qty=document.getElementById("qty").value;
    var sub=price*qty;
    document.getElementById("tot").innerHTML=sub;
}