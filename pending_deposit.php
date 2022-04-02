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
    <section class="section"><p>pending deposits</p></section>

    <div class="depo">
    <?php
    
$select="select * from deposit where status ='pending' ";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0">

        <tr>
            <th>name</th>
            <th>receiver wallet</th>
            <th>trancaction type</th>
            <th>amount</th>
            <th>sender wallet</th>
            <th>date</th>
            <th>action</th>
        </tr>
	<?php while ($row=$sql->fetch_assoc()) {?>
        <tr>
<td>
    <?php echo $row['sender_name']; ?>
</td>	

<td>
    <?php echo $row['wallet']; ?>
</td>	

<td>
    <?php echo $row['trans_type']; ?>
</td>	

<td>
    $<?php echo $row['amount']; ?>
</td>	

<td>
    <?php echo $row['sender_wallet']; ?>
</td>			
    
<td>
    <?php echo $row['date']; ?>
</td>		

<td>
    <form action="pending_action.php" method="post">
    <input type="submit" value="Confirm" name="depo-sub">
    <input type="hidden" name="iid" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="idx" value="<?php echo $row['sender_id']; ?>">
    <input type="hidden" name="amt" value="<?php echo $row['amount']; ?>">
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
        text-align:center;">No Pending Deposits 🚫️</div>';
    }
    ?>
</div>
</body>
</html>