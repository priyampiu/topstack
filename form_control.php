<?php
//error_reporting(0);
include "form_dao.php";
if(isset($_POST['reg']))
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $ps=$_POST['pass'];
    $ep=md5($e);
    $p=$_POST['phone'];
    $d=$_POST['dept'];
    $g=$_POST['gender'];
    $h=$_POST['hobby']; // h is in array form
    $hby=implode(",",$h); // conver h from array to string
    $b=$_POST['bio'];
    $user=array("name"=>$n,"email"=>$e,"pass"=>$ep,"phone"=>$p,"depart"=>$d,"gender"=>$g,"hobby"=>$hby,"bio"=>$b);
    $r=addusers($user);
    if($r)
    {
        session_start();
        $_SESSION['un']=$n;
        header("Location:form_welcome.php");
    }
    else
    {
        header("Location:form_view.php"); 
    }
}

$user=get_users();

if(isset($_POST['dlt']))
    {
        $i=$_POST['id'];
        $dl=dltuser($i);
        if($dl)
        {
            header("Location:form_welcome.php?un=$n"); 
        }
    }

if(isset($_POST['edt']))
{
    $id=$_POST['id'];
    header("Location:form_edit.php?ID=$id");
}

if(isset($_POST['edit']))
{
    $i=$_POST['id'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $ps=$_POST['pass'];
    $ep=md5($ps);
    $p=$_POST['phone'];
    $d=$_POST['dept'];
    $g=$_POST['gender'];
    $h=$_POST['hobby']; // h is in array form
    $hby=implode(",",$h); // conver h from array to string
    $b=$_POST['bio'];
    $n_user=array("id"=>$i,"name"=>$n,"email"=>$e,"pass"=>$ep,"phone"=>$p,"depart"=>$d,"gender"=>$g,"hobby"=>$hby,"bio"=>$b);
    if(edit_user($n_user))
    {
        header("Location:form_welcome.php?id=$i&un=$n");
    }
    else
    {
        header("Location:form_edit.php");
    }
}

if(isset($_POST['log']))
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['pass'];
    $ep=md5($p);
    $us=array('n'=>$n,'e'=>$e,'p'=>$ep,);
    if(login($us))
    {
        //echo "ok";
        header("Location:form_welcome.php?un=$n");
    }
    else
    {
        //echo "not";
        header("Location:form_login.php");
    }
}
?>