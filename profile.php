<?php
session_start();
require 'connect.php';
require('restriction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style-back.css"> -->
    <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
    <title>Settings</title>
</head>
<body>

    <?php require 'backhead.php'; ?>

    <section class="body">
    <section class="section"><p>settings and security</p></section> 

    <div class="settings">
        <section>

<?php

$sellt="select * from user_tab where id='".$_SESSION['id']."' ;";
$restty=$conn->query($sellt);
$row=$restty->fetch_assoc();

if ($row<=1) {
    echo "<script>alert('No Information Found 🚫️');</script>";
}
else{?>

    <form action="update.php" method="post">

    <input type="text" name="nome" value="<?php echo $row['name'];?>" placeholder="<?php echo $row['name'];?>">

    <input type="email" name="eemail"  value="<?php echo $row['email'];?>" readonly>

    <input type="password" name="pass" value="<?php echo $row['password'];?>" placeholder="<?php echo $row['password'];?>">

    <input type="password" name="cword" placeholder="confrim password" value="<?php echo $row['password'];?>">

    <input type="text" name="btcoin" value="change btc wallet" placeholder="change btc wallet">

    <input type="text" name="ethcoin"  value="change eth wallet" placeholder="change eth wallet">

    <input type="text" name="bnbcoin" value="change bnb wallet" placeholder="change bnb wallet">

    <input type="text" name="usdtcoin" value="usdt wallet" placeholder="usdt wallet">
    <?php } ?>
<!-- 
    <input type="text" name="banj" id="" value="bank name" placeholder="bank name">

    <input type="text" name="acct" id="" value="account number" placeholder="account number"> -->

    <input type="submit" value="save changes" id="save" name="update">
            </form>
        </section>
    </div>







</section>
</body>
</html>