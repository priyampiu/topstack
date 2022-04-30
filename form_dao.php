<?php
include 'db_con.php';
function addusers($user_arr){
    $sql="insert into form values (null,?,?,?,?,?,?,?,?)";
    $n=$user_arr['name'];
    $e=$user_arr['email'];
    $ps=$user_arr['pass'];
    $p=$user_arr['phone'];
    $d=$user_arr['depart'];
    $g=$user_arr['gender'];
    $h=$user_arr['hobby'];
    $b=$user_arr['bio'];
    $conn=$GLOBALS['con'];
    $st=$conn->prepare($sql);
    $st->bind_param("ssssssss",$n,$e,$ps,$p,$d,$g,$h,$b);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

function get_users()
{
    $conn=$GLOBALS['con'];
    $sql="select * from form";
    $result=$conn->query($sql);
    $arr=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           //echo $row['Name']."<br>";
           $arr[]=$row;
        }
    }
    return $arr;
    // echo "<pre>";
    // echo print_r($arr);
    // echo "</pre>";
}

function dltuser($id)
{
    $conn=$GLOBALS['con'];
    $sql="delete from form where id=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        return 1;   
        
    }
    else
    {
        return 0;
        
    } 
}

function get_user($id)
{
    $conn=$GLOBALS['con'];
    $sql="select * from form where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute())
    {
        $res=$st->get_result();
        if($res->num_rows>0)
        {
             $row=$res->fetch_assoc();
            return $row;
        }
    }
    else
    {
        echo $conn->errorr;
        
    } 
}

function edit_user($new_user)
{
    $i=$new_user['id'];
    $nn=$new_user['name'];
    $ne=$new_user['email'];
    $nps=$new_user['pass'];
    $np=$new_user['phone'];
    $nd=$new_user['depart'];
    $ng=$new_user['gender'];
    $nh=$new_user['hobby'];
    $nb=$new_user['bio'];
    $conn=$GLOBALS['con'];
    $sql="update form set Name=?,Email=?,Password=?,Phone=?,Department=?,Gender=?,Hobby=?,Bio=? where ID=?";
    $st=$conn->prepare($sql);
    $st->bind_param("ssssssssi",$nn,$ne,$nps,$np,$nd,$ng,$nh,$nb,$i);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

function login($u)
{
    $n=$u['n'];
    $e=$u['e'];
    $p=$u['p'];
    $conn=$GLOBALS['con'];
    $sql="select Name,Email from form where Name=? and Email=? and Password=?";
    $st=$conn->prepare($sql);
    $st->bind_param("sss",$n,$e,$p);
    if($st->execute())
    {
        $res=$st->get_result();
        if($res->num_rows>0)
        {
            // $row=$res->fetch_assoc();
            // foreach($row as $r)
            // {
            //     echo $r."<br>";
            // }
            return 1;
        }
        else
        {
            // echo "can not";
            return 0;
        }   
    }
}

?>