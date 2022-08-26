<?php
session_start();
require 'connect.php';
require('restriction.php');
require 'balance.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-back.css">
    <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
    <script src="note.js"></script>
    <title>Minexlimited</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

            <section class="body">
    <section class="section"><p>transfer funds</p></section> 

    <div class="withd">
    <p>your account balance is $<?php echo $bal ?> </p>
    <p><?php if (isset($_POST['transfer-btn'])) {
       require 'transfer_act.php';
    } ?></p>

    <section>

        <form action="" method="post">
    <input type="number" name="amt"  placeholder="enter amount you want to transfer" value="<?php echo @$_POST['amt']?>" required>
    <input type="text" name="temail"  placeholder="enter recipient email address" value="<?php echo @$_POST['temail']?>" required style="text-transform:lowercase;">
    <input type="hidden" name="iid"  value="<?php echo $_SESSION['id']; ?>">
    
        <input type="submit" value="transfer" id="btn" name="transfer-btn">
    </form>
    
    </section>

    </div>







    </section>
    </body>
    </html>