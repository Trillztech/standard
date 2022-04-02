<?php
session_start();
require 'connect.php';
require('restriction.php');
require 'balance.php'; 
require 'select.php';
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
    <script src="https://kit.fontawesome.com/4b50fd086e.js" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/e5b39bc11e.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>

<?php require 'backhead.php'; ?>

            <section class="body">
    <section class="section"><p>dashboard</p></section>

<div class="top">
    <section id="dash">
        <span>
        <h2>hi welcome back</h2>
        <h2><?php echo $_SESSION['name'];?></h2>
    </span>
    <span>
        <img src="img/customer-support.png" alt="file format not supported">
    </span>
    </section>

    <section>
<span>
    <h1>$<?php echo $bal ?></h1>
    <p>balance</p>
    <h4>+0.00%</h4>
    <p>daily</p>
</span>

<span id="rou">
   <p>$</p>
</span>
    </section>

    <section>
    <span>
    <h1>$<?php echo $rot['amount']; ?></h1>
    <p><?php echo $rot['plan']; ?></p>
    <p>last transaction</p>
</span>

<span id="rou">
   <p>$</p>
</span>
    
    </section>

    <section>
<span>
    <h1>$<?php echo $row['ref_bonus'] ?></h1>
    <p>referral bonus</p>
    <h4>+10.00%</h4>
    <p>referral commission</p>
</span>

<span id="rou">
   <p>$</p>
</span>
    </section>
</div>

<div class="lower">

<!-- iframe for crypto -->
<section id="iframe">
<iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=100&pref_coin_id=1505&graph=yes" width="100%" height="400px" scrolling="true" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:1;margin:0;padding:0; background:white;"></iframe>
</section>

</div>

<div class="last">
    <h2 style="margin-top:1%">last transaction</h2>
<section>
<span>
    <h3>last Deposit</h3>
    <h3>last withdrawal</h3>
    <h3>active plan</h3>
    <!-- <h3>total Deposits</h3>
    <h3>total withdrawals</h3> -->
    <h3>status</h3>
</span>

<span>
    <p>$<?php echo $roll['amount']; ?></p>
    <p>$0.00</p>
    <p><?php echo $rot['plan']; ?></p>
    <!-- <p>$0.00</p>
    <p>$0.00</p> -->
    <p>running</p>
</span>

</section>
</div>

</section>
</div>

</div>
</body>
</html>