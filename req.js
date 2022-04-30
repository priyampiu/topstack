function check()
{
    var Skin_Color=document.forms["requirement"]["color"].value;
    var Height=document.forms["requirement"]["height"].value;
    var Age=document.forms["requirement"]["age"].value;
    var Health=document.forms["requirement"]["brother"].value;
    var you_have=document.forms["requirement"]["health"].value;
if(Skin_Color=="FAIR"||Skin_Color=="fair"||Skin_Color=="Fair")
{
    document.getElementById('clr').innerHTML="<div class='yes'>you are 60% accepted</div>";
    return true;
}
if(Height>=165)
{
    document.getElementById('ht').innerHTML="<div class='yes'>you are 65% accepted</div>";
    return true;
}   
if(Age>=26)
{
    document.getElementById('ag').innerHTML="<div class='yes'>you are 70% accepted</div>";
    return true;
}
if(Health=="GOOD"||Health=="good"||Health=="Good")
{
    document.getElementById('hlt').innerHTML="<div class='yes'>you are 75% accepted</div>";
    return true;
}
if(you_have>0)
{
    document.getElementById('brtr').innerHTML="<div class='yes'>you are 80% accepted</div>";
    return true;
}
alert("**you are not eligible**");
return false;
}