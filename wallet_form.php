<?php
session_start();
require 'connect.php';

$amt = $_POST['amt'];
$recieve = $_POST['swallet'];
$date = date('d:m:Y');
$status = "pending";
$id = $_SESSION['id']; 
$name = $_SESSION['name']; 
$wallet = $_POST['reciver_wallet'];
$trans = $_POST['crypto'];
// $network = $_POST['network'];

$_SESSION['from']=$_POST['swallet'];
$_SESSION['to']= $_POST['reciver_wallet'];
$_SESSION['trans'] = $_POST['crypto'];
$_SESSION['net'] = $_POST['network'];
$_SESSION['amount'] = $_POST['amt'];

$inn="insert into deposit(
    amount,
    sender_wallet,
    status,
    date,
    sender_id,
    sender_name,
    wallet,
    trans_type,
    plan,
    planx,
    planxx
    )VALUES(
    '$amt',
    '$recieve',
    '$status',
    '$date',
    '$id',
    '$name',
    '$wallet',
    '$trans',
    '',
    '',
    ''
    )";
$sql=$conn->query($inn);

if ($sql) {
    echo "<script>window.location='transactions.php';</script>";
}

else{
echo '<p style="
color:red;
text-align:center;
text-transform:capitalize;
padding:2%;
box-sizing:border-box;
">Invalid Transaction 🚫️</p>';

}

?>