<?php 
session_start();
require 'connect.php';
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
    <script src="https://kit.fontawesome.com/e5b39bc11e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contain">
        <div class="small" id="menu">
            
            <section style="border:0px;">
                <img src="img/logo.png" alt="file format not supported">
            </section>

            <section>
        <a href="dashboard.php">
<i class="fas fa-tasks-alt"></i>&nbsp dashboard</a>
            </section>

            <section>
                <a href="deposit.php"> 
                <i class="fa-solid fa-credit-card"></i> &nbsp deposit</a>
            </section>

            <section>
                <a href="invest.php">
                <i class="fa-solid fa-chart-line"></i> &nbsp invest</a>
            </section>

            <section>
                <a href="withdraw.php">
                <i class="fas fa-hand-holding-usd"></i> &nbsp withdraw</a>
            </section>

            <section>
                <a href="profile.php">
                <i class="fa-solid fa-gear"></i> &nbsp settings</a>
            </section>

            <section>
                <a href="transactions.php">
                <i class="fa-solid fa-clipboard-list"></i> &nbsp histroy</a>
            </section>

            <section>
                <a href="user_ref.php">
                <i class="fas fa-link"></i> &nbsp referrals</a>
            </section>

            <section>
                <a href="logout.php">
                <i class="fa-solid fa-right-to-bracket"></i> &nbsp logout</a>
            </section>
        </div>

        <!-- html for menu -->

        <div class="big" id="xbodyx">
        <section class="head">

          <div class="toomenu">
           
    <div class="bar" onclick="openclosex()">
        <span id="one"></span>
        <span id="two"></span>
        <span id="three"></span>
    </div>
    
<!--      
        <div id="span">
    <span  class="tog"  onclick="closeopw()"> ☰ </span>
    </div> -->

         
    <div  class="tog"  onclick="closeopw()">
        <span id="one"></span>
        <span id="two"></span>
        <span id="three"></span>
    </div>
     
    
          </div>

<div id="user">

    <span>
        <p>$<?php echo $bal ?></p>
    </span>

    <span>
        <p><?php $dt=date("h:i:sa"); echo $dt;?> </p>
    </span>

    <span>
        <p><?php echo $_SESSION['user']; ?></p>
    </span>

    <span>
        <p>support@gmail.com</p>
    </span>
</div>
</section>

<!-- small screen html -->


<div class="small-screen" id="small-menu">
             <p onclick="xlosex()">&times</p>
            <section style="border:0px;">
        <img src="img/logo.png" alt="file format not supported">
            </section>

            <section>
        <a href="dashboard.php">
<i class="fas fa-tasks-alt"></i>&nbsp dashboard</a>
            </section>

            <section>
                <a href="deposit.php"> 
                <i class="fa-solid fa-credit-card"></i> &nbsp deposit</a>
            </section>

            <section>
                <a href="invest.php">
                <i class="fa-solid fa-chart-line"></i> &nbsp invest</a>
            </section>

            <section>
                <a href="withdraw.php">
                <i class="fas fa-hand-holding-usd"></i> &nbsp withdraw</a>
            </section>

            <section>
                <a href="profile.php">
                <i class="fa-solid fa-gear"></i> &nbsp settings</a>
            </section>

            <section>
                <a href="transactions.php">
                <i class="fa-solid fa-clipboard-list"></i> &nbsp histroy</a>
            </section>

            <section>
                <a href="user_ref.php">
                <i class="fas fa-link"></i> &nbsp referrals</a>
            </section>

            <section>
                <a href="logout.php">
                <i class="fa-solid fa-right-to-bracket"></i> &nbsp logout</a>
            </section>
        </div>


    
