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

$email = clean($_POST['eemail']);
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);

$sele="SELECT * from user_tab WHERE email='$email'and password='$past' and block=''";

$sql=$conn->query($sele);
$num=$sql->num_rows;
$row=$sql->fetch_assoc();

//declaring session
$_SESSION['id']=$row['id'];
$_SESSION['name']=$row['name'];
$_SESSION['user']=$row['username'];
$_SESSION['balance']=$row['balance'];
$_SESSION['email']=$row['email'];


if ($num>=1) {
    echo '<script>alert("Welcome👍️");window.location="dashboard.php"</script>';
}

else{
	echo '<script>alert("invalid details 👎️");window.location="login.php"</script>';
}



$conn->close();
?>
