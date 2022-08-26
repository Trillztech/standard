<?php
session_start();
require 'connect.php';
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
    <script src="https://kit.fontawesome.com/e5b39bc11e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contain">
        <div class="small" id="menu">
            
            <section style="border:0px;">
    <a href="admin_dashboard.php">
        <img src="img/logo.png" alt="file format not supported">
    </a>
            </section>

            <section>
        <a href="admin_dashboard.php">
<i class="fas fa-tasks-alt"></i>&nbsp dashboard</a>
            </section>

            <section>
                <a href="pending_deposit.php"> 
                <i class="fa-solid fa-credit-card"></i> &nbsp pending deposit</a>
            </section>

            <section>
                <a href="pending_withdraw.php">
                <i class="fas fa-hand-holding-usd"></i> &nbsp pending withdraw</a>
            </section>

            <section>
                <a href="pending_transfer.php">
                <i class="fa-solid fa-arrow-right-arrow-left"></i> &nbsp pending transfer</a>
            </section>

            <section>
                <a href="users.php">
                <i class="fa-solid fa-gear"></i> &nbsp view users</a>
            </section>

            <section>
                <a href="admin_msg.php">
                <i class="fas fa-envelope"></i> &nbsp messages</a>
            </section>

            
            <section>
                <a href="histroy.php">
                <i class="fa-solid fa-clipboard-list"></i> &nbsp histroy</a>
            </section>

            <section>
                <a href="admin_logout.php">
                <i class="fa-solid fa-right-to-bracket"></i> &nbsp logout</a>
            </section>
        </div>

        <div class="big" id="xbodyx">

            <section class="head">

            <div class="toomenu">
           
           <div class="bar" onclick="openclosex()">
               <span id="one"></span>
               <span id="two"></span>
               <span id="three"></span>
           </div>
               
    <div  class="tog"  onclick="closeopw()">
        <span id="one"></span>
        <span id="two"></span>
        <span id="three"></span>
    </div>
     
           
                 </div>

<div id="user">

    <span>
        <p><?php $dt=date("h:i:sa"); echo $dt;?> </p>
    </span>

    <span>
    <i class="fas fa-envelope"><sup style="color:red; font-size:1rem;"><?php echo $sum; ?></sup></i>
    </span>

    <span>
    <i class="fa-solid fa-users-between-lines"></i>
    </span>
</div>
</section>


<!-- small screen html -->


<div class="small-screen" id="small-menu">

             <p onclick="xlosex()">&times</p>
             
            <section style="border:0px;">
    <a href="admin_dashboard.php">
        <img src="img/logo.png" alt="file format not supported">
    </a>
            </section>

            <section>
        <a href="admin_dashboard.php">
<i class="fas fa-tasks-alt"></i>&nbsp dashboard</a>
            </section>

            <section>
                <a href="pending_deposit.php"> 
                <i class="fa-solid fa-credit-card"></i> &nbsp pending deposit</a>
            </section>

            <section>
                <a href="pending_withdraw.php">
                <i class="fas fa-hand-holding-usd"></i> &nbsp pending withdraw</a>
            </section>

            <section>
                <a href="pending_transfer.php">
                <i class="fa-solid fa-arrow-right-arrow-left"></i> &nbsp pending transfer</a>
            </section>

            <section>
                <a href="topup.php">
                <i class="fa-solid fa-chart-line"></i> &nbsp topup</a>
            </section>

            <section>
                <a href="users.php">
                <i class="fa-solid fa-gear"></i> &nbsp view users</a>
            </section>

            <section>
                <a href="admin_msg.php">
                <i class="fas fa-envelope"></i> &nbsp messages</a>
            </section>

            <section>
                <a href="histroy.php">
                <i class="fa-solid fa-clipboard-list"></i> &nbsp histroy</a>
            </section>

            <section>
                <a href="admin_logout.php">
                <i class="fa-solid fa-right-to-bracket"></i> &nbsp logout</a>
            </section>
        </div>
