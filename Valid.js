function valid_func(){
    var vmail=document.forms["namef"]["mail"].value;
    var vpass=document.forms["namef"]["pass"].value;

    if(vmail==null||vmail==" ")
    {
        document.getElementById('e').innerHTML="<div class='err_clr'>**email id is required**</div>";
        return false;
    }
    if(vmail.indexOf('@')<=0)
    {
        document.getElementById('e').innerHTML="<div class='err_clr'>**Invalid email id**</div>";
        return false;
    }
    if((vmail.charAt(vmail.length-4)!='.')&&(vmail.charAt(vmail.length-3)!='.'))
    {
        document.getElementById('e').innerHTML="<div class='err_clr'>**Invalid email id**</div>";
        return false;
    }
    if(vpass==" "||vpass==null)
    {
        document.getElementById('p').innerHTML="<div class='err_clr'>**Password is required**</div>";
        return false;
    }
    if((vpass.length)!=8)
    {
        document.getElementById('p').innerHTML="<div class='err_clr'>**Password length should be 8**</div>";
        return false;
    }
    alert("submitted");
    return true;
}