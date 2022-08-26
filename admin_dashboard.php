<?php
session_start();
require 'connect.php';
require('restriction.php');
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
    <?php require 'admin_head.php'; ?>
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
<!-- <i class="fas fa-chart-area"></i> -->
<i class="fas fa-chart-pie"></i>
<p style="text-indent:30px;"><?php echo $num; ?></p>
    <p>total daily users</p>
</span>

<span id="rou">
   <!-- <p>$</p> -->
</span>
    </section>

    <section>
    <span>
    <!-- <i class="fas fa-donate"></i> -->
    <i class="fas fa-coins"></i>
<p style="text-indent:20px;"><?php echo $sun; ?></p>
    <p>total transactions</p>
</span>

<span id="rou">
   <!-- <p>$</p> -->
</span>
    
    </section>

    <section>
<span>
<i class="fas fa-envelope"></i>
<p style="text-indent:20px;"><?php echo $sum; ?></p>
    <p>messages </p>
</span>

<span id="rou">
   <!-- <p>$</p> -->
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
    <h2>last transaction</h2>
<section>
<span>
    <h3>last Deposit</h3>
    <h3>last withdrawal</h3>
    <h3>total Deposits</h3>
    <h3>total withdrawals</h3>
</span>

<span>
    <p>$<?php echo $last_depo; ?></p>
    <p>$<?php echo $last_with; ?></p>
    <p>$<?php echo $total_depo; ?></p>
    <p>$<?php echo $total_with; ?></p>
</span>

</section>
</div>

</section>
</div>

</div>
</body>
</html>