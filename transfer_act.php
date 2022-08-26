<?php
require 'connect.php';

$amt=$_POST['amt'];
$xid = $_POST['iid'];
$recipient= $_POST['temail'];   
$name= $_SESSION['name'];
$id = $_SESSION['id'];
$date = date('d:m:Y');


if ($_SERVER['REQUEST_METHOD']=="POST"){

    $sele="SELECT * from user_tab WHERE email LIKE '$recipient%'";
    $rest=$conn->query($sele);
    $row=$rest->fetch_assoc();
    $xmail=$row['email'];   

    $sele="SELECT * from transfer_tab WHERE email LIKE '$email%'";
    $rest=$conn->query($sele);
    $roy=$rest->num_rows;
    

    // script allows transfer to be done when dere is no pending transfer
    $sel="SELECT * from user_tab WHERE id LIKE '$xid%'";
    $rest=$conn->query($sel);
    $rot=$rest->fetch_assoc(); 

    if ($row['email'] == $recipient){

        if ($amt >= $rot['balance']) {
            echo '<p style="
            color:red;
            text-align:center;
            text-transform:capitalize;
            padding:2%;
            box-sizing:border-box;
            padding-bottom:0%;
            box-sizing:border-box;
            ">insufficient balance
            </p>';
        }

elseif ($roy['receiver_email'] == $recipient){
    echo '<p style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    padding-bottom:0%;
    box-sizing:border-box;
    ">you have a pending transfer
    </p>';    
}


else{  
    $inn="insert into transfer_tab(
        name,
        amount,
        status,
        date,
        receiver_email,
        receiver_id,
        counter,
        any,
        anyx,
        any_1,
        any_2,
        any_3,
        empty1,
        empty2
        )VALUES(
        '$name',
        '$amt',
        'pending',
        '$date',
        '$recipient',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        ''
        )";
$resy = $conn->query($inn);

if ($resy) {
       
    $upt="UPDATE user_tab 
    SET balance = balance - $amt
    WHERE id=$id ";
    
    $rest = $conn->query($upt);

    if ($rest) {
        echo "<script>window.location='transactions.php';</script>";
    }
}
}
        
    }
    
    else{
        echo '<p style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        padding:2%;
        box-sizing:border-box;
        padding-bottom:0%;
        box-sizing:border-box;
        ">recipient not found 
        </p>';
    }
}
