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
    
$name = clean($_POST['nome']);
$email = clean($_POST['eemail']);
$confirm = clean($_POST['cword']);
$country = clean($_POST['ntry']);
$user = clean($_POST['user']);
$ref = clean($_POST['ref_mail']);
$balance = "0.00";
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);


if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($name)||empty($email)||empty($past)||empty($confirm)||empty($user)||empty($country)){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:white;
        padding:2%;
        box-sizing:border-box;
        ">please fill all text fields 🚫️</div>';
    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:white;
        padding:2%;
        box-sizing:border-box;
        ">please enter a valid Email address 🚫️</div>';
    }       

    elseif (strlen($pastx)>8){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:white;
        padding:2%;
        box-sizing:border-box;
        ">Password should not excced 8 characters  🚫️</div>';
   }

   elseif ($pastx != $confirm){
    echo '<div style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    background-color:white;
    padding:2%;
    box-sizing:border-box;
    ">Password does not match 🚫️</div>';
} 

else{
    $sele="SELECT * from user_tab WHERE email LIKE '$email%'";
    
    $rest=$conn->query($sele);
    $row=$rest->fetch_assoc();
    
    if($row['email'] == $email){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:white;
        padding:2%;
        box-sizing:border-box;
        ">email already exists 🚫️</div>';
    } 
else{
    $inn="insert into user_tab(
        name,
        username,
        email,
        password,
        ref_email,
        ref_percent,
        ref_bonus,
        balance,
        block,
        blank,	
        blankk,	
        blankx
        )VALUES(
        '$name',
        '$user',
        '$email',
        '$past',
        '$ref',
        '',
        '0.00',
        '$balance',
        '',
        '',
        '$country',
        ''
        )";
    $sql=$conn->query($inn);
    
    if ($sql) {
    echo '<div style="
    color:green;
    text-align:center;
    text-transform:capitalize;
    background-color:white;
    padding:2%;
    box-sizing:border-box;
    ">Sucessfully Registered 👍️</div>';
    require 'mail/send.php';
    header("location:login.php");

    }
    
    else{
    echo '<div style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    background-color:white;
    padding:2%;
    box-sizing:border-box;
    ">Not Registered 🚫️</div>';
    }
    
}  
}
}



?>
