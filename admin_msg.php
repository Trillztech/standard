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
    <title>messages</title>
</head>
<body>
    <?php require 'admin_head.php'; ?>
            <section class="body">
    <section class="section"><p>messages</p></section>

    <div class="depo">
    <?php
    
$select="select * from contact_us";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0">

        <tr>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
        </tr>
	<?php while ($row=$sql->fetch_assoc()) {?>
        <tr>
<td>
    <?php echo $row['name']; ?>
</td>	
 	 	 	
<td>
    <?php echo $row['email']; ?>
</td>	

<td>
    <?php echo $row['title']; ?>
</td>	

<td>
    <?php echo $row['message']; ?>
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
        text-align:center;">No messages 🚫️</div>';
    }
    ?>
</div>
</body>
</html>