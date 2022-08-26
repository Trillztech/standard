<?php 
session_start();
require 'connect.php';
require 'submit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logop.png" type="image/x-icon">
    <title>Admin login</title>
</head>
<body>
    
<!-- html for login -->

<div class="login" id="login">
    <div class="fot">
    <form action="" method="post">
        <div>
            <?php 
            if (isset($_POST['log'])) {
                require 'adminlog.php';
            }
            ?>
        </div>
        <input type="email" placeholder="Email" name="eemail" value="<?php echo @$_POST['eemail'];?>" require>
        <input type="password" placeholder="password" name="pass" value="<?php echo @$_POST['pass'];?>" require>
        <input type="submit" value="login" name="log" id="log">
        <p>don't have an account ? <a href="admin_reg.php">sign up</a></p>
    </form>

    </div>
</div>
</body>
</html>