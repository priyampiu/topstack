<?php
/*additon*/
$a=8;
$b=7;
$c=$a+$b;
echo "addition= ".$c."<br>";


/*if else and elsif*/
$d=5;
$e=6;
if($d==$e)
{
    echo "equal <br>";
}
elseif($d>$e)
{
    echo "d greater than e <br>";
}
elseif($d<$e)
{
    echo "d less than e <br>";
}
else
{
   echo "not equal <br>";
}


/* == and === */
$f=5;
$g='5';
if($f==$g)
{
    echo "both are same content <br>";
}
elseif($f===$g)
{
   echo "both are same type <br>";    
}
else
{
    echo "both are not equal <br>";
}


/*switch case*/
$j=7;
$k=8;
$h=$j==$k;
 switch($h)
 {
     case 1:
         echo "equal <br>";
     break;
     default:
     echo "not equal <br>";
     break;
}


/*for loop*/
$l="for";
for($i=0;$i<=4;$i++)
{
    echo $l."<br>";
}


/*while loop*/
$m="while";
$i=0;
 while($i<5)
 {
     echo $m."<br>";
     $i++;
 }


/*do while loop*/
$n="do-while";
$i=0;
 do
 {
    echo $n."<br>";
    $i++;
 }while($i<5);


/*factorial*/
$o=5;
$fact=1;
for($i=1;$i<=$o;$i++)
{
    $fact=$fact*$i;
}
echo "fact= ".$fact."<br>";


/*index array*/
$arr=array(1,2,3);     
//array
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i]." ";
}
echo "<br>";
//for each
foreach($arr as $ar)
{
    echo $ar."<br>"; 
}
echo "array length= ".count($arr)."<br>";


/*associative array*/
$arr1=array('id'=>1,'name'=>"priya",'roll'=>2);
foreach($arr1 as $a1 => $a2)
{
    echo $a1."=>".$a2."<br>";
}


/*multidimensional array*/
$arr2=array(
    array('id'=>1,'name'=>"priya",'roll'=>2),
    array('id'=>2,'name'=>"piu",'roll'=>5),
    array('id'=>3,'name'=>"piush",'roll'=>8),
);
for($i=0;$i<count($arr2);$i++)
{
    foreach($arr2[$i] as $a3 => $a4)
    {
        echo $a3."=>".$a4."<br>"; 
    }
}


/*associative array in associative array*/
$arr3=array(
    "1"=>array('id'=>1,'name'=>"priya",'roll'=>2),
    "2"=>array('id'=>2,'name'=>"piu",'roll'=>5),
    "3"=>array('id'=>3,'name'=>"piush",'roll'=>8),
);
foreach($arr3 as $a5 => $a6)
{
    foreach($a6 as $a7 => $a8)
    {
        echo $a5."=>".$a7."=>".$a8."<br>";
    }
}

/*explode*/
$str="hello world";
$ex=explode(" ",$str);
echo $ex."<br>";


/*implode*/
$arr4=array("hello","world");
$im=implode(",",$arr4);
echo $im."<br>";

/*length of string*/
echo strlen($str)."<br>";

/*reverse of string*/
echo strrev($str)."<br>";

/*replace string*/
echo str_replace("hello","hii",$str)."<br>";

/*string word count*/
echo str_word_count($str)."<br>";

/*define method*/
define('A',3);
echo A;

/*creating function*/
function add($x,$y)
{
$z=$x+$y;
return $z;
}
$ad=add(5,3);
echo $ad;
?>