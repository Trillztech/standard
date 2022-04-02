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
        echo "<script>alert('please fill all text fields 🚫️'); window.location='admin_reg.php';</script>";
    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("please enter a valid Email address 🚫️"); window.location="admin_reg.php";</script>';
        }
        
        elseif (strlen($pastx)>8){
            echo '<script>alert("Password should not excced 8 characters 🚫️"); window.location="admin_reg.php";</script>';
        }

        elseif ($pastx != $confirm) {
            echo '<script>alert("Password does not match 🚫️"); window.location="admin_reg.php";</script>';
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
    echo"<script>alert('Sucessfully Registered 👍️');window.location='adminlogin.php';</script>";
}

else{
    echo"<script>alert('Not Registered 🚫️');window.location='admin_reg.php';</script>";
}

}
}
}



$conn->close();
?>

