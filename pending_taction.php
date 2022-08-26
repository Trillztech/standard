<?php
require 'connect.php';
// script for balance  
$dx = $_POST['iid'];

$sel="SELECT * from transfer_tab WHERE id = $dx ";
$rest=$conn->query($sel);
$rot=$rest->fetch_assoc();
 $amtx = $rot['amount'];
$email = $_POST['xpercent'];

$upt="update user_tab set 
    balance = balance + $amtx
    where email = '$email'";
$done = $conn->query($upt);


if ($upt){
    $date="update transfer_tab set 
        status = 'confirmed'
        WHERE id = $dx";
    $sql = $conn->query($date);

}


header('location:pending_transfer.php');

?>