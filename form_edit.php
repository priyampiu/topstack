<?php
include "form_dao.php";
$id=$_GET['ID'];
$u=get_user($id);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Form</title>
<link rel="stylesheet" href="form_style.css">
</head>

<body>
    
<form action="form_control.php" method="post">
    <div class="contain">
        <header><b>EDIT FORM</b></header>
    
    <!--NAME FIELD-->
        <label><b>Name: </b></label>
        <input type="text" name="name" class="namefield" placeholder="Enter your name" value="<?=$u['Name'];?>">
        <br>

    <!--EMAIL FIELD-->
        <label><b>Email: </b></label>
        <input type="email" name="email"  placeholder="Enter your name" value="<?=$u['Email'];?>">
        <br>
    
    <!--PASSWORD FIELD-->
    <label><b>Password: </b></label>
    <input type="password" name="pass"  placeholder="Enter your name">
    <br>

    <!--CONTACT FIELD-->
        <label><b>Phone No: </b></label>
        <input type="number" name="phone" class="number" placeholder="Enter your Phone no." value="<?=$u['Phone'];?>">
        <br>

    <!--DEPARTMENT FIELD-->
        <label><b>Department: </b></label>
        <select name="dept" value="">
            <option selected disabled>Choose Option</option>
            <option >CST</option>
            <option>CE</option>
            <option>EE</option>
            <option>ETCE</option>
            <option>SE</option>
            <option>SCE</option>
</select>
        <br>

    <!--GENDER FIELD-->
        <label><b>Gender: </b></label>
        MALE <input type="radio" name="gender" value="male" value="">
        FEMALE <input type="radio" name="gender" value="female" value="">
        OTHER <input type="radio" name="gender" value="other" value="">
        <br>

    <!--HOBBY FIELD-->
        <label><b>Hobby: </b></label>
        Crafting <input type="checkbox" name="hobby[]" value="crafting" value="">
        Drawing <input type="checkbox"  name="hobby[]" value="drawing" value="">
        Dancing <input type="checkbox"  name="hobby[]" value="dancing" value="">
        Singing <input type="checkbox"  name="hobby[]" value="singing" value="">
        Other <input type="text"  name="hobby[]" value="<?=$u['Hobby'];?>">
        <br>

    <!--BIO DATA FIELD-->
        <label><b>Bio: </b></label><br>
        <textarea name="bio" placeholder="drop your bio" value="<?=$u['Bio'];?>"></textarea>
        <br>
    
    <!--SUBMIT FIELD-->
        <input type="hidden" value="<?=$u['ID'];?>" name="id">
        <input type="submit" value="Edit" name="edit">
    
            </div>
    </form>
   
</body>
</html>