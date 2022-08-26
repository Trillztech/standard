<?php
require 'connect.php';

// script for total users dasboard
$select="select * from user_tab";
$sql=$conn->query($select);
$num=$sql->num_rows;


// script for msg admin dasboard
$select="select * from contact_us";
$sql=$conn->query($select);
$sum=$sql->num_rows;


// script for last deposit admin dasboard
$select="select * from deposit";
$sql=$conn->query($select);
$sun=$sql->num_rows;


// script for last deposit dasboard
$select="SELECT * from deposit where sender_id ='$id' order by id DESC";
$sqldt=$conn->query($select);
$roll=$sqldt->fetch_assoc();


// script for multiple deposit investment dasboard
$sel="select * from investment_plan where investor_id ='".$_SESSION['id']."' and profit !='0'";
$slq=$conn->query($sel);
$sut=$slq->num_rows;


// script for last deposit investment dasboard
$select="select * from investment_plan where investor_id ='".$_SESSION['id']."'  order by id DESC";
$sqlo=$conn->query($select);
$dot=$sqlo->fetch_assoc();

// script for last withdraw dasboard
$select="SELECT * from withdraw where reciever_id ='$id' order by id DESC";
$sqla=$conn->query($select);
$woll=$sqla->fetch_assoc();


// script for last deposit admin dasboard
$sett="select * from deposit order by id desc limit 1";
$sql=$conn->query($sett);
$row = $sql->fetch_assoc();
$last_depo=$row['amount'];

// script for last withdraw admin dasboard
$withsett="select * from withdraw order by id desc limit 1";
$withsql=$conn->query($withsett);
$roa = $withsql->fetch_assoc();
$last_with=$roa['amount'];

// script for total deposit
$sel="select id,amount,sum(amount) as total from deposit ";
$sql=$conn->query($sel);
$wow=$sql-> fetch_assoc();
$total_depo = $wow['total'];

// script for total withdrawal
$sel="select id,amount,sum(amount) as total from withdraw ";
$sql=$conn->query($sel);
$dow=$sql-> fetch_assoc();
$total_with = $dow['total'];



?>