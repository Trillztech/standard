<?php
session_start();
require 'connect.php';

if ($_SERVER['REQUEST_METHOD']=="POST"){
		
    if (empty($name)||empty($past)||empty($confirm)){
        echo "<script>alert('please fill all text fields 🚫️'); window.location='profile.php';</script>";
    }

    elseif ($past!=$confirm) {
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

