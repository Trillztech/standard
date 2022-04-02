<?php
session_start();

// submit for user reg tab

// if (isset($_POST['register'])) {
//     require 'action.php';
//  }
 
//  if (isset($_POST['cancel'])) {

//     header("location:index.php");
//  }
//  end



// submit for admin reg tab
if (isset($_POST['reg'])) {
   require 'adminreg_action.php';
}
// end



//  submit for block user 
 $idd = $_POST['id']; 
 if (isset($_POST['block'])) {
   $upt="update user_tab set 
   block = 'blocked'
   WHERE id = '$idd' ";
   $done = $conn->query($upt);

   // if ($done) {
   //    echo '<script> confirm("Are you sure you want to Block User");</script>';
   // }

   // else {
   //    echo 'not done';
   // }
    
 }
//  end



//  submit for unblock user 
$idd = $_POST['id']; 
if (isset($_POST['Unblock'])) {
  $udt="update user_tab set 
  block = ''
  WHERE id = '$idd' ";
  $tdone = $conn->query($udt);

//   if ($tdone) {
//      echo '<script> confirm("Are you sure you want to Unblock User");</script>';
//   }

//   else {
//    echo '<script> alert("Could not Unblock User");</script>';
//   }
   
}
//  end



// submit for view user dashboard
require 'connect.php';
$vid=$_POST['dii'];

if (isset($_POST['view'])) {
   $sele="SELECT * from user_tab WHERE id='$vid'";
   $sql=$conn->query($sele);
   $num=$sql->num_rows;
   $row=$sql->fetch_assoc();
   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   $_SESSION['email']=$row['email'];
   $_SESSION['balance']=$row['balance'];
   header("location:dashboard.php");
   
   $conn->close();
}
// end for view user dashboard



// submit to topup user account
 $idd = $_POST['idd']; 
 $amount= $_POST['amount']; 

if (isset($_POST['credit'])) {
$upt="update user_tab set 
balance = balance + '$amount'
WHERE id = '$idd' ";
$done = $conn->query($upt);

}
// end

 ?>