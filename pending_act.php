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
            echo "<script>window.location='pending_withdraw.php';</script>";
    }

    else {
            echo "<script>window.location='pending_withdraw.php';</script>";
    }
    
    
?>