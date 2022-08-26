
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
// $plan = clean($_POST['selectform']);
// $amt = clean($_POST['amount']);
// $percent = clean($_POST['percentage_name']);
// $roi = clean($_POST['roi']);
// $id = $_SESSION['id'];
// $per = (10/100)*$amt;

    
$name= $_SESSION['name'];
$plan = $_POST['selectform'];
$amt = $_POST['amount'];
$cent = $_POST['percentage_name'];
$roi = $_POST['roi'];
$id = $_SESSION['id'];
// $per = percent();
$date = date('d:m:Y');
$interest = "0";

$pet=(10/100)*$amt;
$pert = ($cent/100)*$amt;


function counterx(){
    $plan = $_POST['selectform'];
    $cnt='';
    if ($plan == 'Basic Plan') {
        $cnt='48';
    }
    elseif ($plan == 'Regular Plan') {
        $cnt='96';
    }
    elseif ($plan == 'Standard Plan') {
        $cnt='150';
    }
    elseif ($plan == 'Premium Plan') {
        $cnt='15';
    }
    elseif ($plan == 'Gold Plan') {
        $cnt='8';
    }
    elseif ($plan == 'Diamond Plan') {
        $cnt='4';
    }
    return $cnt;
}
$timer = counterx();
$sel="SELECT * FROM user_tab where id ='$id' ";
$sql=$conn->query($sel);
$row=$sql->fetch_assoc();
$bal = $row['balance'];


if ($_SERVER['REQUEST_METHOD']=="POST"){

    if(empty($plan)||empty($amt)||empty($cent)||empty($roi)){
    echo '<p style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    ">please fill all text fields 🚫️</p>';
    
    }

elseif ($amt > $bal) {
echo '<p style="
color:red;
text-align:center;
text-transform:capitalize;
padding:2%;
box-sizing:border-box;
">Insufficent Balance 🚫️</p>';

}

else{
    
$seld="SELECT * FROM user_tab where id ='".$_SESSION['id']."'";
$result=$conn->query($seld);

if ($result->num_rows >= 1) {
    
$inn="insert into investment_plan(
    investor_name,
    amount,
    plan,
    percentage,
    interest,
    profit,
    counter,
    date,
    investor_id,
    any_1,
    any_2,
    any_3,
    empty1,
    empty2
    )VALUES(
    '$name',
    '$amt',
    '$plan',
    '$pert',
    '$interest',
    '$amt',
    '$timer',
    '$date',
    '$id',
    '',
    '',
    '',
    '',
    ''
    )";
$sql=$conn->query($inn);

if ($sql) {
    $upt="UPDATE user_tab 
    SET balance = balance - $amt
    WHERE id='".$_SESSION['id']."' ";
    
    $rest = $conn->query($upt);

    if ($rest) {
echo "<script>window.location='invest.php'</script>";
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
    }
}

    else {
        $upt="UPDATE user_tab 
        SET blank = '1',
        ref_bonus = $pet
        WHERE ref_email='".$_SESSION['email']."' ";
        $resy = $conn->query($upt);
        header('location:invest.php');
    }
}
}
    ?>
