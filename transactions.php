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
    <title>transaction history</title>
</head>
<body>
    <?php require 'backhead.php'; ?>
            <section class="body">
    <section class="section" style="text-align:center"><p>last deposits</p></section>

    <div class="depo">
    <?php
    
$select="select * from deposit where sender_id ='".$_SESSION['id']."'";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0" align="center">

    <tr>

                    <th>Amount</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>to</th>
                    <th>from</th>
                    <th>status</th>
                </tr>

	<?php while ($row=$sql->fetch_assoc()) {?>
    <tr>

<td>
$<?php  echo $row['amount']; ?>
</td>	

<td>
    <?php echo $row['date']; ?>
</td>	

       
<td>
    <?php echo $row['trans_type']; ?>
</td>	

<td>
    <?php echo $row['wallet']; ?>
</td>	

<td>
    <?php echo $row['sender_wallet']; ?>
</td>	

                    
<td>
    <?php echo $row['status']; ?>
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
        text-align:center;">No Deposits Made 🚫️</div>';
    }
    ?>

<br><br><br>
<section class="section" style="text-align:center"><p>last Withdrawals</p></section>

<div class="depo">
<?php

$select="select * from withdraw where reciever_id  ='".$_SESSION['id']."'";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

<table cellspacing="0" align="center">

<tr>
                <th>Amount</th>
                <th>Date</th>
                <th>Type</th>
                <th>from</th>
                <th>network</th>
                <th>status</th>
            </tr>

<?php while ($row=$sql->fetch_assoc()) {?>
            <tr>
                
<td>
$<?php echo $row['amount']; ?>
</td>	

<td>
<?php echo $row['date']; ?>
</td>	
   
<td>
<?php echo $row['crypto_type']; ?>
</td>	

<td>
<?php echo $row['reciver_wallet']; ?>
</td>	

<td>
<?php echo $row['network']; ?>
</td>	

                
<td>
<?php echo $row['status']; ?>
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
    text-align:center;">No Withdrawal Made 🚫️</div>';
}
?>


<br><br><br>
<section class="section" style="text-align:center"><p>last transfers</p></section>

<div class="depo">
<?php

$select="select * from transfer_tab where name ='".$_SESSION['name']."'";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

<table cellspacing="0" align="center">

<tr>
                <th>name</th>
                <th>amount</th>
                <th>status</th>
                <th>date</th>
                <th>receiver email</th>
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
<?php echo $row['status']; ?>
</td>	

<td>
<?php echo $row['date']; ?>
</td>	

<td>
<?php echo $row['receiver_email']; ?>
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
    text-align:center;">No trasfers Made 🚫️</div>';
}
?>



</div>
</body>
</html>

