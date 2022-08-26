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
    echo '<p style="
    width:80%;
    border:0px solid red;
    margin:auto;
    color:green;
    text-align:center;">Account Successfully funded 👍️</p>';
    header("location:pending_deposit.php");

}

else {
    echo '<p style="
    width:80%;
    border:0px solid red;
    margin:auto;
    color:red;
    text-align:center;">Invalid Transaction 🚫️</p>';
    header("location:pending_deposit.php");

}
}

?>