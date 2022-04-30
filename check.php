<?php

/*function for find factorial of a number*/
function fact($n)
{
    $f=1;
    for($i=1;$i<=$n;$i++)
    {
        $f=$f*$i;
    }
    echo "factorial of ".$n." is= ".$f."<br>";
}

/*function for check wheather a number is prime or not*/
function prime($a)
{
    $count=0;
    for($i=2;$i<=$a/2;$i++)
    {
        if($a%$i==0)
        {
            $count++;
	        //break;
        }	
    }
    if($count==0 && $a!=1)
    {
   	    echo $a." is a Prime Number";
    }
    else
    {
   	    echo $a."is Not a Prime Number";
    }
}

/*function for check wheather a number is armstrong or not*/
function arm($a)
{
    $temp=$a; //153
    $kook=$a;
    $size=0;

    //find the size of the number
    while($temp>0.5)
    {      
        $size=$size+1; 
        $temp=$temp/10;
    }
   $sum=0;
   //calculation
   while($kook>=0.5)
    {
      $reminder=$kook%10;
      $mul=1;
      for($i=1;$i<=$size;$i++)
      {
        $mul=$mul*$reminder;
      }
      $sum=$sum+$mul;
      $kook=$kook/10;
    }
    if($a==$sum)
    {
        echo $a." is Armstrong Number";
    }
    else
    {
        echo $a." is not an Armstrong Number";
    }
}

/*function for check wheather a number is armstrong or not*/
function pal($a)
{
    $kook=$a;
    $sum=0;
    while($kook>=0.5)
    {
      $reminder=$kook%10;
      $sum=$sum*10+$reminder;
      $kook=$kook/10;
    }
    if($sum==$a)
    {
        echo $a." is a palindrome number";
    }
    else
    {
        echo $a." is not a palindrome number";
    }
}

/*fetching data from html*/
$x=$_POST["n"];

/*call functions by clicling buttons*/
if(isset($_POST["fact"]))
{
    fact($x);
}
elseif(isset($_POST["prime"]))
{
    prime($x);
}
elseif(isset($_POST["arm"]))
{
    arm($x);
}
elseif(isset($_POST["pal"]))
{
    pal($x);
}
else
{
    echo "can't calculate";
}

?>