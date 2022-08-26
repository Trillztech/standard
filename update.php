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
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);
$confirm = clean($_POST['cword']);

if ($_SERVER['REQUEST_METHOD']=="POST"){
		
    if (empty($name)||empty($pastx)||empty($confirm)){
        echo "<script>alert('please fill all text fields 🚫️'); window.location='profile.php';</script>";
    }

    elseif ($pastx!=$confirm) {
        echo "<script>alert('Incorrect Password🚫️'); window.location='profile.php';</script>";
    }

    else {
        $upt="UPDATE user_tab 
        SET name='$name',
        password='$past'
        WHERE id='$id'";
        
        $sqll=$conn->query($upt);
        
        if ($sqll) {
            echo '<script>alert("Profile Updated 👍️");window.location="profile.php";</script>';
        }
        else{
            echo '<script>alert("Profile Not Updated🚫️");window.location="profile.php";</script>';
        }
        }
    }


        ?>

