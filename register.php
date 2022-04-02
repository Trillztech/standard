<?php 
session_start();
$_SESSION['name']=$_POST['nome'];
$_SESSION['email']=$_POST['eemail'];

// if (isset($_POST['register'])) {
//     require 'action.php';
//  }
 
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
    // require 'submit.php';
    ?>


            <div class="regf">
                <h2>register for online access</h2>

                <div>
<?php
if (isset($_POST['register'])) {
    require 'action.php';
 }
 ?>
            </div>
                <section>
                    <h1>enter contact information</h1>
                    <p>to get started,enter your contact information to help us verify your identity</p>
                </section>
            <form  method="post" name="forms">
                <section>
                    <input type="text" placeholder="name" name="nome" value="<?php echo @$_POST['nome'];?>">
                    <input type="text" placeholder="username" name="user" value="<?php echo @$_POST['user'];?>">
                </section>
                <section>
                    <input type="email" placeholder="email" name="eemail" style="text-transform:lowercase;" value="<?php echo @$_POST['eemail'];?>">
                    <input type="email" placeholder="refferal email" name="ref_mail" style="text-transform:lowercase;" value="<?php echo @$_POST['ref_mail'];?>">
                </section>
                <section>
                    <input type="password" name="pass" id="pass" placeholder="password" value="<?php echo @ $_POST['pass'];?>">
                    <input type="password" name="cword" id="pass" placeholder="confirm password" value="<?php echo @$_POST['cword'];?>">
                </section>

                <section id="bnt">
                    <input type="submit" value="cancel">
                    <input type="submit" value="register" name="register">
                </section>
        <p>Already have an account ? <a href="login.php">login</a></p>
            </form><br>
            </div>


</body>
</html>