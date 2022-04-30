<?php
function add($a,$b)
{
    $c=$a+$b;
    echo "addition= ".$c;
}
function sub($a,$b)
{
    $c=$a-$b;
    echo "subtraction= ".$c;
}
function mul($a,$b)
{
    $c=$a*$b;
    echo "multiplication= ".$c;
}
function div($a,$b)
{
    $c=$a/$b;
    echo "division= ".$c;
}

$x=$_POST["n1"];
$y=$_POST["n2"];
//echo $x." ".$y;
if(isset($_POST["sum"]))
{
    add($x,$y);
}
elseif(isset($_POST["sub"]))
{
    sub($x,$y);
}
elseif(isset($_POST["mul"]))
{
    mul($x,$y);
}
elseif(isset($_POST["div"]))
{
    div($x,$y);
}
else
{
    echo "can't calculate";
}

?>