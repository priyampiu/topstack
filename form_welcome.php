<?php include "form_control.php"; ?>

<!doctype html>
<html>
    <head>
        <title>
            WECLCOME PAGE
        </title>
    </head>
    <body>
        <h1>
            <b>
                Welcome
                <?php=$_SESSION["un"];?>
                <!-- also we can write this statement as "< ?=$_GEt['uname'];?>".
                for the '=' sign browswer can understand that user wants to print this-->
            </b>    
        </h1>
        <h3>Your Database:</h3>
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Bio</th>
                <th>Action</th>
            </tr>
            <?php foreach($user as $a){?>   
                <tr>
                    <td><?=$a['ID'];?></td>
                    <td><?=$a['Name'];?></td>
                    <td><?=$a['Email'];?></td>
                    <td><?=$a['Password'];?></td>
                    <td><?=$a['Phone'];?></td>
                    <td><?=$a['Department'];?></td>
                    <td><?=$a['Gender'];?></td>
                    <td><?=$a['Hobby'];?></td>
                    <td><?=$a['Bio'];?></td>
                    <td>
                        <form action="form_control.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $a['ID'] ?>">
                            <input type="submit" name="dlt" value="D">
                            <input type="submit" name="edt" value="E">
                        </form>
                        <!-- <a href="form_control.php?id=$a['ID']">Edit</a> -->
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>