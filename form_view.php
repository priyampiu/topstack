<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" href="form_style.css">
</head>

<body>
    
<form action="form_control.php" method="post" enctype="multipart/form-data"> 
    <div class="contain">
        <header><b>REGISTRATION FORM</b></header>
    
    <!--NAME FIELD-->
        <label><b>Name: </b></label>
        <input type="text" name="name" class="namefield" placeholder="Enter your name">
        <br>

    <!--EMAIL FIELD-->
        <label><b>Email: </b></label>
        <input type="email" name="email"  placeholder="Enter your password">
        <br>

    <!--PASSWORD FIELD-->
    <label><b>Password: </b></label>
    <input type="password" name="pass"  placeholder="Enter your name">
    <br>

    <!--CONTACT FIELD-->
        <label><b>Phone No: </b></label>
        <input type="number" name="phone" class="number" placeholder="Enter your Phone no.">
        <br>

    <!--DEPARTMENT FIELD-->
        <label><b>Department: </b></label>
        <select name="dept">
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
        MALE <input type="radio" name="gender" value="male">
        FEMALE <input type="radio" name="gender" value="female">
        OTHER <input type="radio" name="gender" value="other">
        <br>

    <!--HOBBY FIELD-->
        <label><b>Hobby: </b></label>
        Crafting <input type="checkbox" name="hobby[]" value="crafting">
        Drawing <input type="checkbox"  name="hobby[]" value="drawing">
        Dancing <input type="checkbox"  name="hobby[]" value="dancing">
        Singing <input type="checkbox"  name="hobby[]" value="singing">
        Other <input type="text"  name="hobby[]" >
        <br>

    <!--BIO DATA FIELD-->
        <label><b>Bio: </b></label><br>
        <textarea name="bio" placeholder="drop your bio"></textarea>
        <br>

    <!--BIO DATA FIELD-->
        <label><b>Profile: </b></label>
        <input type="file" name="profile" class="profile" placeholder="Enter your file">
        <br>
    
    <!--SUBMIT FIELD-->
        <input type="submit" value="Register" name="reg">
    
            </div>
    </form>
   
</body>
</html>