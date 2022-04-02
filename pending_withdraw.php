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
    <title>pending withdraw</title>
</head>
<body>
    <?php require 'admin_head.php'; ?>
            <section class="body">
    <section class="section"><p>pending withdrawals</p></section>

    <div class="depo">
    <?php
    
$select="select * from withdraw where status ='pending' ";
$sql=$conn->query($select);
$num=$sql->num_rows;
if ($num>0) {?>

    <table cellspacing="0">

        <tr>
            <th>name</th>
            <th>receiver wallet</th>
            <th>wallet type</th>
            <th>network</th>
            <th>amount</th>
            <th>date</th>
            <th>action</th>
        </tr>
	<?php while ($row=$sql->fetch_assoc()) {?>
    <form action="pending_act.php" method="post">
        <tr>
<td>
    <?php echo $row['reciever_name']; ?>
</td>	

<td>
    <?php echo $row['reciver_wallet']; ?>
</td>	

<td>
    <?php echo $row['crypto_type']; ?>
</td>	

<td>
    <?php echo $row['network']; ?>
</td>	

<td>
    $<?php echo $row['amount']; ?>
</td>	
		
    
<td>
    <?php echo $row['date']; ?>
</td>			
        <td>
            <input type="submit" value="Confirm" name="depo-sub">
    <input type="hidden" name="iid" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="idx" value="<?php echo $row['reciever_id']; ?>">
        </td>
        </tr>
    <?php } ?>
    </form>
    </table>
    

    <?php 
    }

    else{

        echo '<div style="
        width:80%;
        border:0px solid red;
        margin:auto;
        color:red;
        text-align:center;">No Pending Withdrawal 🚫️</div>';
    }
    ?>
</div>
</body>
</html>