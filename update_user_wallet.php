<?php
session_start();
require 'connect.php';

$sel="select id,profit,sum(profit) as total from investment_plan where investor_id = '".$_SESSION['id']."' and  counter = 0 and profit != 0";

$sql=$conn->query($sel);
$row=$sql-> fetch_assoc();
$total = $row['total'];

if ($sql) {
    $upp="update user_tab set 
    balance = balance + $total where id = '".$_SESSION['id']."'";
    $result=$conn->query($upp);
    
    if ($result) {
        $upa="update investment_plan set 
        interest = 0,
        profit = 0
        where counter = 0 and investor_id = '".$_SESSION['id']."'";
        $complete=$conn->query($upa);
    }
}

?>