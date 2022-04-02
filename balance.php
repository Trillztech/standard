<?php
session_start();
require 'connect.php';

$id = $_SESSION['id'];

$sel="SELECT * FROM user_tab where id ='$id' ";
$sql=$conn->query($sel);
$row=$sql->fetch_assoc();

if ($row<=1) {
    echo "<script>alert('No Information Found 🚫️');</script>";
}

// else {
//      echo $row['blockk']; 
//     }

$bal = $row['balance'];
$ui = $row['id'];

?>