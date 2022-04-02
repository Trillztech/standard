<?php
session_start();

require 'connect.php';
require 'balance.php';

$amt = $_POST['amt'];
$recieve = $_POST['wallet'];
$date = date('d:m:Y');
$status = "pending";
$id = $_POST['iid'];
$name = $_SESSION['name']; 
$trans = $_POST['crypto'];
$network = $_POST['network'];
$bal = $row['balance'];



if ($_SERVER['REQUEST_METHOD']=="POST"){
		
    if (empty($amt)||empty($recieve)||empty($network)||empty($trans)){
        echo "<script>alert('please fill all text fields 🚫️'); window.location='withdraw.php';</script>";
    }

    elseif($amt>$bal){
        echo "<script>alert('insufficent funds 🚫️'); window.location='withdraw.php';</script>";
    }

    else {   
$inn="insert into withdraw(
    amount,
    reciver_wallet,
    status,
    date,
    reciever_id,
    reciever_name,
    network,
    crypto_type,
    plan
    )VALUES(
    '$amt',
    '$recieve',
    '$status',
    '$date',
    '$id',
    '$name',
    '$network',
    '$trans',
    ''
    )";

$result=$conn->query($inn);

if ($inn) {
       
        $upt="UPDATE user_tab 
        SET balance = balance - $amt
        WHERE id=$id ";
        
        $rest = $conn->query($upt);

        if ($rest) {
            echo"<script>alert('Your Withdrawal is pending');window.location='withdraw.php';</script>";
        }
    
else{
echo"<script>alert('Invalid Transaction 🚫️');window.location='withdraw.php';</script>";
}
}
}
}


?>