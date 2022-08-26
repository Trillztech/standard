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
    <title>refferal</title>
</head>
<body>
    <?php require 'backhead.php'; ?>
            <section class="body">
    <section class="section"><p>my down line</p></section>

    <div class="depo">
    <?php
    
$select="select * from user_tab where ref_email = '".$_SESSION['email']."'";
$sql=$conn->query($select);
$num=$sql->num_rows;

if ($num>0) {?>

    <table cellspacing="0" width="200px" style="text-align:center;">

        <tr>
            <th>name</th>
            <th>email</th>
        </tr>
	<?php while ($row=$sql->fetch_assoc()) {?>
        <tr>	
 	 	 	
<td>
    <?php echo $row['name']; ?>
</td>	

<td>
    <?php echo $row['email']; ?>
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
        text-align:center;">No Downline Yet 🚫️</div>';
    }
    ?>
</div>
</body>
</html>