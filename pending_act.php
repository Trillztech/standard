<?php

session_start();

require 'connect.php';

// script for withdrawal  

$id = $_POST['iid'];
$idx = $_POST['idx']; 
   
$upp ="update withdraw
set status = 'confirm' 
WHERE id = '$id' && '$idx' ";

$sql = $conn -> query($upp);


    if($sql) {
        echo '<script>alert("Withdrawal Confirmed 👍️");window.location="pending_withdraw.php";</script>';
    }

    else {
        echo '<script>alert("Withdrawal denied🚫️");window.location="pending_withdraw.php";</script>';
    }
    
    
?>