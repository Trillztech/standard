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
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);
$confirm = clean($_POST['cword']);


if ($_SERVER['REQUEST_METHOD']=="POST"){
		
    if (empty($name)||empty($email)||empty($past)||empty($confirm)){
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
            ">Password should not excced 8 characters 🚫️</div>';
        }

        elseif ($pastx != $confirm) {
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
$sele="SELECT * from admin_tab WHERE email LIKE '$email%'";

$rest=$conn->query($sele);
$row=$rest->fetch_assoc();

if($row['email'] == $email){
    echo '<script>alert("Email already exists 🚫️"); window.location="admin_reg.php";</script>';
} 

else{
    $inn="INSERT INTO admin_tab(
        name,
        email,
        password,
        confirm,
        blockk,
        blankk,
        blank
        )VALUES(
        '$name',
        '$email',
        '$past',
        '',
        '',
        '',
        ''
        )";
$sql=$conn->query($inn);

if ($sql) {
    header('location:admin_dashboard.php');
}

else{
    echo '<div style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    ">Not Registered 🚫️</div>';
}

}
}
}



$conn->close();
?>

