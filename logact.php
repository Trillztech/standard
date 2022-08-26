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
    // echo '<script>alert("Welcome👍️");window.location="dashboard.php"</script>';
    echo '<div style="
    color:green;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    ">Sucessfully welcome 👍️</div>';

    header("location:dashboard.php");

}

else{
	// echo '<script>alert("");window.location="login.php"</script>';

    echo '<div style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    ">Invalid details 👎️</div>';
    // header("location:login.php");

}



$conn->close();
?>
