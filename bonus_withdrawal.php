<?php
session_start();
require 'connect.php';

$upt="UPDATE user_tab 
SET balance = balance + ref_bonus
WHERE id= '$id' ";

$rest = $conn->query($upt);

if ($upt) {
    $upy="UPDATE user_tab 
    SET ref_bonus = ref_bonus - ref_bonus
    WHERE id= '$id' ";
    
    $res = $conn->query($upy);

    if ($res) {
        echo "<script>window.location='dashboard.php';</script>";
    }

else {
    echo 'hello';
}
}



?>