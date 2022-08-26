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
    <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
    <title>pending deposits</title>
</head>
<body>
    <?php require 'admin_head.php'; ?>
            <section class="body">
    <section class="section"><p>pending transfers</p></section>

    <div class="depo">
    <?php

$sel="SELECT * from user_tab";
$rest=$conn->query($sel);
$rot=$rest->fetch_assoc();
    
$select="select * from transfer_tab where status ='pending' ";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0">

        <tr style="text-align:left">
            <th>name</th>
            <th>amount</th>
            <th>receiver email</th>
            <th>date</th>
            <th>credit</th>
        </tr>
	<?php while ($row=$sql->fetch_assoc()) {?>
        <tr>
<td>
    <?php echo $row['name']; ?>
</td>	

<td>
    $<?php echo $row['amount']; ?>
</td>	

<td>
    <?php echo $row['receiver_email']; ?>
</td>	

<td>
    <?php echo $row['date']; ?>
</td>	

<td>
    <form action="pending_taction.php" method="post">
    <input type="submit" value="Confirm" name="depo-sub">
    <input type="hidde" name="iid" value="<?php echo $rot['id']; ?>">
    <input type="hidde" name="xamt" value="<?php echo $row['amount']; ?>">
    <input type="hidden" name="xpercent" value="<?php echo $row['receiver_email']; ?>">
    </form>
        </td>
        </tr>
    <?php } ?>
    </table>
    

    <?php 
    }

    else{

        echo '<div style="
        width:80%;
        border:0px solid red;
        margin:auto;
        color:red;
        text-align:center;">No Pending Transfers 🚫️</div>';
    }
    ?>
</div>
</body>
</html>