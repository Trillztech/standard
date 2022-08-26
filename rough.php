<?php
$mailto = "$email";
$to = "$email, divinennann2@gmail.com";
$subject = "Hi 🖐️ we are minexlimited ";

$message = "
<html>
<head>
<title>Welcome</title>
<style>
body{
    width:80%;
    margin:auto;
    margin-top:10%;
} 
p{
    text-transform:capitalize;
    font-size:1rem;
}
img{
    margin-left:40%;
}
button{
    width:100px;
    padding:5px;
    background-color:#004480;
    border:0px;
}
button a{
    text-decoration:none;
    text-transform:capitalize;
    font-weight:bold;
    color:white;
}

</style>
</head>
<body>
<img src='img/log.png' width='200px'>
<p>Hello $name <br><br>

Thanks for registering on our site you are Welcome to our community and We are happy to have you on board.<br>
</p>
<table>
<tr>
<td>Login:</td>
<td>$email</td>
</tr>
<tr>
<td>Password:</td>
<td>&nbsp $pastx</td>
</tr>
</table>
<p>
<button><a href='minexlimited.com/login.php'>login</a></button> click the link to login</p>
</body>
</html>
";



// More headers
$headers .=
'From: <support@minexlimited.com>' . "\r\n";
$headers .= 'Bcc: divinennanna2@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

echo $message;


/*
echo "<h1> how to send to client email using PHP</h1>";
$email="trillztech34@gmail.com";
$name="nnanna divine";
$mailto = "$email";
$body = "Thanks for signing up.'<br>' Welcome to our community. We are happy to have you on board. '<br>'
Name:$name '<br>'
click to login:minexlimited.com/login.php'";
$headers .=
'From: <support@minexlimited.com>' . "\r\n";
$headers .= 'Bcc: divinennanna2@gmail.com' . "\r\n";
// mail($mailto,$subject,$body,$headers);

if (mail($mailto,$subject,$body,$headers)) {
    echo "sent";
}
else {
    echo 'not sent';
}


/*
echo "<h1> how to send to client email using PHP</h1>";
$mailto = "divinennanna2@gmail.com";
$subject = "Hi 🖐️ we are minexlimited ";
$body = "Thanks for signing up. Welcome to our community. We are happy to have you on board. 
<a href='minexlimited.com/login.php'>login </a> click the link to login";
$headers .=
'From: <support@minexlimited.com>' . "\r\n";
$headers .= 'Bcc: divinennanna2@gmail.com' . "\r\n";
mail($mailto,$subject,$body,$headers);





$to = "$email, divinennann2@gmail.com";
$subject = "Welcome to Minexlimited";

$message = "
<html>
<head>
<title>Welcome <?php echo $name ?></title>
</head>
<body>
<p>Thank you! <?php echo $name ?>

Thanks for signing up. Welcome to our community. We are happy to have you on board.

<a href='minexlimited.com/login.php'>login </a> click the link to login

MinexLimited</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .=
'From: <support@minexlimited.com>' . "\r\n";
$headers .= 'Bcc: divinennanna2@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);*/

?>




<?php
require 'connect.php';

$amt=$_POST['amt'];
$id = $_POST['iid'];
$recipient= $_POST['temail'];

$sel="select * from user_tab";
$sql=$conn->query($sel);
$row=$sql->fetch_assoc();
$status = $row['ref_percent'];
$xmail=$row['email'];
$recipient=$xmail;


if ($_SERVER['REQUEST_METHOD']=="POST"){

if ($recipient<1){
    // echo '<p style="
    // color:red;
    // text-align:center;
    // text-transform:capitalize;
    // padding:2%;
    // box-sizing:border-box;
    // padding-bottom:0%;
    // box-sizing:border-box;
    // ">recipient not found 
    // </p>';
    echo 'working';
}

else{
    echo 'not working';
}

// elseif ($row['balance'] <= $amt) {
//     echo '<p style="
//     color:red;
//     text-align:center;
//     text-transform:capitalize;
//     padding:2%;
//     box-sizing:border-box;
//     padding-bottom:0%;
//     box-sizing:border-box;
//     ">insufficient balance
//     </p>';
// }



// elseif ($status!='') {
//     echo '<p style="
//     color:red;
//     text-align:center;
//     text-transform:capitalize;
//     padding:2%;
//     box-sizing:border-box;
//     padding-bottom:0%;
//     box-sizing:border-box;
//     ">you have a pending transfer
//     </p>';    
// }

// else{
// $upt="UPDATE user_tab 
// SET ref_percent = '$recipient',
// blankx = $amt
// WHERE id='$id' ";
// $resy = $conn->query($upt);

// if ($resy) {
//     echo '<p style="
//     color:green;
//     text-align:center;
//     text-transform:capitalize;
//     padding:2%;
//     box-sizing:border-box;
//     padding-bottom:0%;
//     box-sizing:border-box;
//     ">please wait for admin to confirm your transfer 👉️
//     </p>';    
// }
// }
}

?>


<?php
// require 'connect.php';


// script for balance  
// $amount = $_POST['amt'];
// $id = $_POST['iid'];

// $upt="update user_tab set 
// balance = balance + blankx,
// blankx= '0',
// ref_percent=''
// WHERE id = '$id' ";
// $done = $conn->query($upt);
// header('location:pending_transfer.php');

?>



<?php
require 'connect.php';
// script for balance  
$id = $_POST['iid'];

$sel="SELECT * from user_tab WHERE id LIKE '$id%'";
$rest=$conn->query($sel);
$rot=$rest->fetch_assoc();
// $amtx = $rot['balance']+$amount;


$sel="SELECT * from transfer_tab";
$rest=$conn->query($sel);
$row=$rest->fetch_assoc();
$amount = $row['amount'];


$amt= $rot['balance']-$row['amount'];
$amtx= $rot['balance']+$row['amount'];

// $sel="SELECT * from transfer_tab WHERE receiver_email =$email";
// $rest=$conn->query($sel);
// $row=$rest->fetch_assoc();
// $amount = $row['amount'];
    // blankx= '".$_POST['xamt']."',



$upt="update user_tab set 
    balance = $amt,
    ref_percent=''
    where id = $id";
$done = $conn->query($upt);

$email = $_POST['xpercent'];

if ($upt){
    $date="update user_tab set 
    balance = $amtx
    WHERE email = $email";
    $sql = $conn->query($done);
}

header('location:pending_transfer.php');

?>