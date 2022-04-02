<?php
require 'connect.php';

$select="select * from user_tab";
$sql=$conn->query($select);
$num=$sql->num_rows;


$select="select * from contact_us";
$sql=$conn->query($select);
$sum=$sql->num_rows;


$select="select * from deposit";
$sql=$conn->query($select);
$sun=$sql->num_rows;


$select="select * from deposit where id ='".$_SESSION['id']."' limit 1";
$sql=$conn->query($select);
// $set=$sql->num_rows;
$roll=$sql->fetch_assoc();


$select="select * from investment_plan where id = $id";
$sql=$conn->query($select);
$sut=$sql->num_rows;
$rot=$sql->fetch_assoc();

?>