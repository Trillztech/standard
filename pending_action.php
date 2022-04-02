<?php
session_start();
require 'connect.php';


// script for balance  
$amount = $_POST['amt'];
$id = $_POST['iid'];
$idd = $_POST['idx']; 

$upt="update user_tab set 
balance = balance + '$amount'
WHERE id = '$idd' ";
$done = $conn->query($upt);

if ($done) {
    $upp ="update deposit
    set status = 'confirm' 
    WHERE id = '$id' && '$idd' ";

    $sql = $conn -> query($upp);

if($sql) {
    echo '<script>alert("Account Successfully funded 👍️");window.location="pending_deposit.php";</script>';
}

else {
    echo '<script>alert("Invalid Transaction🚫️");window.location="pending_deposit.php";</script>';
}
}

?>