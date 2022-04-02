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
    <title>Withdraw</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

            <section class="body">
    <section class="section"><p>withdraw</p></section> 

    <div class="withd">
    <p>your account balance is $<?php echo $bal ?> </p>
    <p><?php echo $error=""; ?></p>

    <section>

        <form action="withdraw_act.php" method="post">
    <input type="number" name="amt"  placeholder="enter amount" required>
    <input type="text" name="wallet"  placeholder="enter wallet address" required>
    <input type="hidden" name="iid"  value="<?php echo $_SESSION['id']; ?>">
           <select name="crypto"  onchange="" required>
               <option value="" name="pay">wallet type</option>
               <option value="Bitcoin" name="pay">Bitcoin</option>
               <option value="Ethereum" name="pay">Ethereum</option>
               <option value="BNB" name="pay">BNB</option>
               <option value="Usdt" name="pay">Usdt</option>
           </select>
    
           <select name="network"  onchange="" required>
               <option value="" name="net">Network</option>
               <option value="Btc" name="net">Btc</option>
               <option value="Erc20" name="net">Erc20</option>
               <option value="Bnb bep20" name="net">Bnb bep20</option>
               <option value="Usdt Trc20" name="net">Usdt Trc20</option>
           </select>
    
        <input type="submit" value="withdraw" id="btn">
    </form>
    
    </section>

    </div>







    </section>
    </body>
    </html>