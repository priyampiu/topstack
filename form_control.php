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
        
        header("Location:form_welcome.php?un=$n");
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
            header("Location:form_welcome.php"); 
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

if(isset($_POST['upload']) && $_FILES['profile'])
{
    $file=$_FILES['profile'];
    $name=$file['name'];
    $type=$file['type'];
    $size=$file['size'];
    $error=$file['error'];
    $tmp_name=$file['tmp_name'];
    if($error==0)
    {
        if($size<1250000)
        {
            $ext=pathinfo($name,PATHINFO_EXTENSION);
            $ext_low=strtolower($ext);
            $n_name=uniqid("IMG-",true).".".$ext_low;
            if(upload($n_name))
            {
                if(move_uploaded_file($tmp_name,"upload/".$n_name))
                {
                    header("location:form_welcome.php");
                }
                else
                {
                    header("location:form_up.php");
                }
            }
        }
        else
        {
            echo "it is exist maximum size";
        }
    }
    else
    {
        echo "something went wromg";
    }
}

function getimg()
{
    $i=get_files();
    return $i;
}
?>