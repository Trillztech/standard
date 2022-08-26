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
    <link rel="stylesheet" href="style-back.css">
    <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
    <script src="note.js"></script>
    <title>Deposit</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

            <section class="body">
    <section class="section"><p>fund your account </p></section> 

    <div class="sive">

     <form action="" method="post" name="base_wallet">

   <section>
<p><?php
if (isset($_POST['wall'])) {
    require 'wallet_form.php';
}?></p>
           <p> select payment method</p>

           <select name="crypto"  onchange="paymentcoin()" required>
               <option value="">wallet type</option>
               <option value="btc" name="pay">Bitcoin</option>
               <option value="eth" name="pay">Ethereum</option>
               <option value="bnb" name="pay">BNB</option>
               <option value="usdt" name="pay">Usdt</option>
           </select>
    <input type="number" name="amt" placeholder="Amount" required>
    <label style="color:red;text-align:center;padding-top:10px;text-transform:capitalize;">****enter your wallet address(Sender's wallet address)****</label>
    <input type="text" name="swallet" placeholder="enter your wallet address" required>
    <input type="hidden" name="reciver_wallet" placeholder="reciever wallet address" required readonly>
    <input type="hidden" name="network" required readonly>
    <input type="submit" value="proceed" name="wall" id="btn">
     <br>  <p><a href="custcare.php">Others</a></p>
   </section>

   <div class="pay">
        <section>
        <span style="display:block;" id="address"></span>
        </section>
    </div>
</form>

</div>
</section>
</body>
</html>
