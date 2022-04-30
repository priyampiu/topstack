<?php
function fact($n)
{
$f=1;
for($i=1;$i<=$n;$i++)
{
    $f=$f*$i;
}
echo "fact= ".$f."<br>";
}
$num=$_POST["number"];
fact($num);
?>