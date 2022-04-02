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
    <title>Invest</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

            <section class="body">
    <section class="section"><p>invest</p></section> 

   
    <div class="invest">

   <section>

    <form action="#" method="post">

       <span>
           <p>basic plan</p>
           <h2>10%</h2>
           <p>after 2 days</p>
           <p>min.....$50</p>
           <p>max.....$999</p>
               <!-- <input type="submit" value="select" name="vest"> -->
       </span>

       <span>
           <p>Regular plan</p>
           <h2>12%</h2>
           <p>after 4 days</p>
           <p>min.....$1000</p>
           <p>max.....$3000</p>
               <!-- <input type="submit" value="select" name="est"> -->
       </span>

       <span>
           <p>standard plan</p>
           <h2>15%</h2>
           <p>after 6 days</p>
           <p>min.....$4000</p>
           <p>max.....$6000</p>
           <!-- <input type="submit" value="select" name="vest"> -->
       </span>

       <span>
           <p>Premium plan</p>
           <h2>18%</h2>
           <p>after 15 hours</p>
           <p>min.....$6000</p>
           <p>max.....$12000</p>
           <!-- <input type="submit" value="select" name="vest"> -->
       </span>

       <span>
           <p>gold plan</p>
           <h2>20%</h2>
           <p>after 8 hours</p>
           <p>min.....$15000</p>
           <p>max.....$100000</p>
           <!-- <input type="submit" value="select" name="vest"> -->
       </span>

       <span>
           <p>diamond plan</p>
           <h2>25%</h2>
           <p>after 4 hours</p>
           <p>min.....$100000</p>
           <p>max.....No limit</p>
           <!-- <input type="submit" value="select" name="vest"> -->
           
       </span>
</form>
   </section>

<div class="cal" onchange="selectcoin()">

<form action="investx.php" method="post" name="myforms">
<select name="selectform" id="set"  onchange="selectcoinx()" onblur="showTextbox()">
<option value="Select A Plan">Select A Plan</option>
<option value="Basic Plan" >Basic Plan</option>
<option value="Regular Plan" >Regular Plan</option>
<option value="Standard Plan" >Standard Plan</option>
<option value="Premium Plan" >Premium Plan</option>
<option value="Gold Plan" >Gold Plan</option>
<option value="Diamond Plan">Diamond Plan</option>
</select>
<div id="txtx"></div>

<input type="text" name="percentage_name" id="cent" placeholder="0%" readonly>
<input type="number" name="roi" id="roi" placeholder="ROI" readonly>
<input type="submit" value="invest" id="subvest">
</div>

</form>
</div>

</div>





    </section>
    </body>
    </html>