<?php 
session_start();
$_SESSION['name']=$_POST['nome'];
$_SESSION['email']=$_POST['eemail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>find advisor</title>
</head>
<body>
    <?php
    require 'connect.php';
    require 'submit.php';
    ?>


            <div class="regf">
                <h2>admin online access</h2>
            <form action="" method="post" name="forms">
                <div><?php
if (isset($_POST['reg'])) {
   require 'adminreg_action.php';
}
?></div>
                <section>
                    <input type="text" placeholder="name" name="nome" value="<?php echo @ $_POST['nome'];?>">
                    <input type="email" placeholder="email" name="eemail" style="text-transform:lowercase;" value="<?php echo @ $_POST['eemail'];?>">
                </section>
                <section>
                    <input type="password" name="pass" id="pass" placeholder="password" value="<?php echo @ $_POST['pass'];?>">
                    <input type="password" name="cword" id="pass" placeholder="confirm password" value="<?php echo @ $_POST['cword'];?>">
                </section>

                <section id="bnt">
                    <input type="submit" value="cancel" name="cancel">
                    <input type="submit" value="register" name="reg">
                </section>
                <p>Already have an account ? <a href="adminlogin.php">login</a></p>
            </form><br>
            </div>

        

</body>
</html>