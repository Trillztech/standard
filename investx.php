
<?php
session_start();

require 'connect.php';

//function to sanitize variable
function clean($data){
require ('connect.php');
$data = htmlentities($data);
$data = htmlspecialchars($data);
$data = stripslashes($data);
$data = trim($data);
$data = mysqli_real_escape_string($conn, $data);
return $data;
}


$plan = clean($_POST['selectform']);
$amt = clean($_POST['amount']);
$percent = clean($_POST['percentage_name']);
$roi = clean($_POST['roi']);
$id = $_SESSION['id'];
$per = (10/100)*$amt;

// $plan = $_POST['selectform'];
// $amt = $_POST['amount'];
// $percent = $_POST['percentage_name'];
// $roi = $_POST['roi'];
// $id = $_SESSION['id'];
// $per = (10/100)*$amt;

$sel="SELECT * FROM user_tab where id ='$id' ";
$sql=$conn->query($sel);
$row=$sql->fetch_assoc();
$bal = $row['balance'];


if ($_SERVER['REQUEST_METHOD']=="POST"){


    if(empty($plan)||empty($amt)||empty($percent)||empty($roi)){
        echo "<script>alert('please fill all text fields 🚫️'); window.location='invest.php';</script>";
    }

elseif ($amt > $bal) {
    echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
}

else{
    
$seld="SELECT * FROM user_tab where id ='$id' && blank='1' ";
$result=$conn->query($seld);

if ($result->num_rows >= 1) {

$inn="insert into investment_plan(
    plan,
    amount,
    percentage,
    roi,
    investor_id,
    empty2
    )VALUES(
    '$plan',
    '$amt',
    '$percent',
    '$roi',
    '$id',
    ''
    )";
$sql=$conn->query($inn);

if ($sql) {
    $upt="UPDATE user_tab 
    SET balance = balance - $amt
    WHERE id='".$_SESSION['id']."' ";
    
    $rest = $conn->query($upt);

    if ($rest) {
echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
    }

else{
    echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
    }
    }
}

    else {
        $upt="UPDATE user_tab 
        SET blank = '1',
        ref_bonus = $per
        WHERE id='".$_SESSION['id']."' ";
        
        $resy = $conn->query($upt);
        header('location:invest.php');
    }
}
}

// echo $id;
    ?>





    <?php


 


// else{
//     }
    // else {
    //     $upt="UPDATE user_tab 
    //     SET blank = '1',
    //     ref_bonus = $per
    //     WHERE id='".$_SESSION['id']."' ";
//     }
// }
// }

// $inn="insert into investment_plan(
//     plan,
//     amount,
//     percentage,
//     roi,
//     investor_id,
//     empty2
//     )VALUES(
//     '$plan',
//     '$amt',
//     '$percent',
//     '$roi',
//     '$id',
//     ''
//     )";
// $sql=$conn->query($inn);

// if ($sql) {
//     $upt="UPDATE user_tab 
//     SET balance = balance - $amt
//     WHERE id='".$_SESSION['id']."' ";
    
//     $rest = $conn->query($upt);

//     if ($rest) {
// echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
//     }

// else{
//     echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
//     }
?>