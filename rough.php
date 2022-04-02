<html>
    <head>
    <script src="https://kit.fontawesome.com/e5b39bc11e.js" crossorigin="anonymous"></script>
        <style>
            .div{
                width: 1000px;
                border:0px solid red;
            }
            i{
                color:red;
            }
        </style>
    </head>

<i class="fa-solid fa-chart-tree-map"></i>
<i class="fa-solid fa-grid-2"></i>
<i class="fa-solid fa-grid"></i>
<i class="fas fa-th"></i>
<i class="fas fa-tasks-alt"></i>
<i class="fa-solid fa-house-circle-check"></i>
<i class="fa-solid fa-gear"></i>
<i class="fa-solid fa-clipboard-list"></i>
<i class="fa-solid fa-right-to-bracket"></i>
<i class="fa-solid fa-cabin"></i>
<i class="fa-solid fa-credit-card"></i>
<i class="fa-solid fa-chart-waterfall"></i>
<i class="fa-solid fa-chart-line"></i>
<i class="fas fa-link"></i>
<i class="fas fa-hand-holding-usd"></i>
<i class="fa fa-calendar-check-o" aria-hidden="true"></i>

<!-- <i class="fas fa-th-large"></i> -->


<div class="div" onchange="selectcoin()">

    <form action="#" method="post" name="myforms">
  <select name="selectform" id="set"  onchange="selectcoinx()">
  <option value="Select A Plan">Select A Plan</option>
  <option value="Basic Plan" >Basic Plan</option>
  <option value="Regular Plan" >Regular Plan</option>
  <option value="Standard Plan" >Standard Plan</option>
  <option value="Premium Plan" >Premium Plan</option>
  <option value="Gold Plan" >Gold Plan</option>
  <option value="Diamond Plan">Diamond Plan</option>
  </select>

  <input type="text" name="amount" id="amt" placeholder="$amount" onchange="get_total()">
  <input type="text" name="percentage_name" id="cent" placeholder="0%">
  <input type="text" name="roi" id="roi" placeholder="return on investment" readonly>
  </div>
    <!-- <input type="hidde" name="idx" value="<?php echo $row['sender_id']; ?>"> -->
    <!-- 
     -->

  </form>
  <script>
// var ROI =  document.myforms.roi.value;
// var amt =  document.myforms.amount.value;
// var percent = document.myforms.percentage_name.value;

// var total= amt/percent * 100/1 + amt;
// document.myforms.amount.value="$50.00";
// document.myforms.roi.value="10%";


    function selectcoinx(){
        
var plan = document.myforms.selectform.value;

switch(plan){

case 'Select A Plan':
document.myforms.percentage_name.value="0%";
break;

case 'Basic Plan':
document.myforms.percentage_name.value="10";
break;


case "Regular Plan":
document.myforms.percentage_name.value="12";
document.myforms.amount.value="1000.00";
break;


case "Standard Plan":
document.myforms.percentage_name.value="15";
document.myforms.amount.value="2000.00";
break;

case "Premium Plan":
document.myforms.percentage_name.value="18";
break;

case "Gold Plan":
document.myforms.percentage_name.value="20";
break;

case "Diamond Plan":
document.myforms.percentage_name.value="25";
break;

// deafult:
// document.myforms.percent.value="hello";

}
    }


    function get_total(){
        per=(document.myforms.percentage_name.value/100)*document.myforms.amount.value;
        document.myforms.roi.value=parseInt(document.myforms.amount.value)+ parseInt(per);
    }

</script>

</html>
<!-- 
<html>
    <head>
        <style>
            body{
                background-color:black;
                color:white;
                text-align: center;
            }

            div p{
                /* border: 1px solid red; */
                margin-top:40vh;
                font-size:2rem;
            }
        </style>
        <script>
            function guiity() {
              
            const countText = document.getElementById('count');

            let load = 0;

            counting=() =>{
                load ++;

                if (load>999) {
                    clearInterval(count);
                }

                countText.innerHTML=`${load}`;

            }

            let count  = setInterval(counting,.3);

             
            }

        </script>
    </head>
    <body onload="guiity()">
        <div>
            <p id="count">1000</p>
        </div>
    </body>
</html> -->
<?php
// if (isset($_POST['update'])) {
//     require 'update.php';
//     }

// require 'connect.php';

// $sel="SELECT * FROM user_tab";
// $sql=$conn->query($sel);
// $row=$sql->fetch_assoc();



// $id=$_SESSION['id'];
// $named=$_POST['some'];
// $emailt=$_POST['maiss'];
// $paste=$_POST['satee'];
// $confiorm=$_POST['done'];
// $servername="localhost";
// $username="root";
// $password="candbf1cd9";
// $database="mydata";


session_start();

require 'connect.php';

// script for balance 

$amt = $_POST['amt'];
$id = $_SESSION['id'];
   
    $upt="UPDATE user_tab 
    SET blockk = blockk + $amt
    WHERE id='$id' ";
    
    $rest = $conn->query($upt);

    if ($upt) {
        $upp ="update deposit
        set status = 'confirm' 
        WHERE sender_id = '$id' ";

        $sql = $conn -> query($upp);

    if($sql) {
        echo '<script>alert("Account Successfully funded 👍️");window.location="pending_deposit.php";</script>';
    }

    else {
        echo '<script>alert("Invalid Transaction🚫️");window.location="pending_deposit.php";</script>';
    }
    
    }

$_SESSION['amount'] = $_POST['amt'];


//function to sanitize variable
// function clean($data){
// require ('connect.php');
// $data = htmlentities($data);
// $data = htmlspecialchars($data);
// $data = stripslashes($data);
// $data = trim($data);
// $data = mysqli_real_escape_string($conn, $data);
// return $data;
// }



    ?>
    

    <!-- action page for reg -->

    <?php
    session_start();
    require 'connect.php';
    
    
    $namex = clean($_POST['nome']);
    $emailx = clean($_POST['eemail']);
    // $past = clean($_POST['pass']);
    $confirm = clean($_POST['cword']);
    $user = clean($_POST['user']);
    $ref = clean($_POST['ref_mail']);
    $balance = "0.00";
    $pasr = $_POST['pass'];
    $pastx= hash('sha256',$pasr);
    
    ?>


    <section class="parent-divs">
    <div>
    <h3>Q. &nbsp What is MinexLimited investment company ?</h3>
    <h2 id="opt" onclick="faq()">+</h2>
</div>
    <div id="cls">
        <p>
        <br><br>
A. &nbsp MinexLimited provide an approach to managing your wealth which provides expertise and the flexibility to help you achieve the life style you desire.
<br><br><br>
We are acredited trading company with 5 years in a forex market. We introduce MinexLimited Investment platform and technology to help users who can not trade profitably in a forex market to earn by investing in our platform.
<br><br></p>
</div>
           </section>

<section class="parent-divs">
    <div>
    <h3>Q. &nbsp How Do I Get started?</h3>
    <h2 id="opt" onclick="faq2()">+</h2>
    </div>
    <div id="cls">
        <p>
       <br><br> A. &nbsp  To get started with MinexLimited Investment company, you will navigate to find advisor fill in your details. >>> verify your email address and login to your dashbaord.</p>
    <br><br>
    </div>
</section>

<section class="parent-divs">
    <div>
    <h3>Q. &nbsp How Do I Make Deposit To My Account After Signup?</h3>
    <h2 id="opt" onclick="faq3()">+</h2>
    </div>
    <div id="cls">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laudantium mollitia facere reprehenderit blanditiis nemo corrupti aspernatur id maiores, iure sed eos commodi voluptatum a? Impedit, quas minima? Tempora, repellat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laudantium mollitia facere reprehenderit blanditiis nemo corrupti aspernatur id maiores, iure sed eos commodi voluptatum a? Impedit, quas minima? Tempora, repellat</p>
    </div>
</section>

<section class="parent-divs">
    <div>
    <h3>Q. &nbsp How Long will it take me to withdraw my earning?</h3>
    <h2 id="opt" onclick="faq4()">+</h2>
    </div>

    <div id="cls">
        <p><br><br>
        A. &nbsp In MinexLimited withdrawal interval is within a given period of plan you selected. You will always have continus withdrawal as long as you have active investment in the system.
<br><br></p>
    </div>
</section><br>

</div>

</div>
</div>

<?php
session_start();

require 'connect.php';
// require 'balance.php';

$plan = $_POST['selectform'];
$amt = $_POST['amount'];
$percent = $_POST['percentage_name'];
$roi = $_POST['roi'];
$id = $_SESSION['id'];
$per = (10/100)*$amt;


$sel="SELECT * FROM user_tab where id ='$id' ";
$sql=$conn->query($sel);
$row=$sql->fetch_assoc();
$bal = $row['balance'];


if ($_SERVER['REQUEST_METHOD']=="POST"){
    $seld="SELECT * FROM user_tab where id ='$id' && blank='1' ";
    $sql=$conn->query($seld);

    if ($sql->num_rows >= 1) {
        
    if (empty($plan)||empty($amt)||empty($percent)||empty($roi)){
        echo "<script>alert('please fill all text fields 🚫️'); window.location='invest.php';</script>";
    }

        // basic plan validation


    elseif ($plan === 'Basic Plan'){
        
        if ($amt > $bal) {
            echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
        }


        elseif ($amt < 50){
            echo "<script>alert('the minmum amount for this plan is $50 '); window.location='invest.php';</script>";
        }

        elseif ($amt > 999) {
            echo "<script>alert('the maxmum amount for this plan is $999 '); window.location='invest.php';</script>";
        }

        
       
        else{
            $inn="insert into investment_plan(
                plan,
                amount,
                percentage,
                roi,
                investor_id,
                empty2
                )VALUES(
                '$plan',
                '$amt',
                '$percent',
                '$roi',
                '$id',
                ''
                )";
            $sql=$conn->query($inn);
            
            if ($sql) {
                $upt="UPDATE user_tab 
                SET balance = balance - $amt
                WHERE id='".$_SESSION['id']."' ";
                
                $rest = $conn->query($upt);

                if ($rest) {
            echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
                }

            else{
                echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
                }

            }
        }
            
        }
        // end of basic plan validation


        // script for regular plan validation


// elseif ($plan === 'Regular Plan') {
   
//     if ($amt > $bal) {
//         echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
//     }


//     elseif ($amt < 1000){
//         echo "<script>alert('the minmum amount for this plan is $1,000 '); window.location='invest.php';</script>";
//     }

//     elseif ($amt > 3000) {
//         echo "<script>alert('the maxmum amount for this plan is $3,000 '); window.location='invest.php';</script>";
//     }


//     else {
    
//         $inn="insert into investment_plan(
//             plan,
//             amount,
//             percentage,
//             roi,
//             investor_id,
//             empty2
//             )VALUES(
//             '$plan',
//             '$amt',
//             '$percent',
//             '$roi',
//             '$id',
//             ''
//             )";
//         $sql=$conn->query($inn);
        
//         if ($sql) {

//             $upt="UPDATE user_tab 
//             SET balance = balance - $amt
//             WHERE id='$id' ";
            
//             $rest = $conn->query($upt);

//             if ($rest) {
//         echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
//             }

//         else{
//             echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
//             }

//         }
//     }
// }

// // end of regular plan validation


//      // script for standard plan validation

// elseif ($plan === 'Standard Plan') {

//     if ($amt > $bal) {
//         echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
//     }

   
//     elseif ($amt < 4000){
//         echo "<script>alert('the minmum amount for this plan is $4,000 '); window.location='invest.php';</script>";
//     }

//     elseif ($amt > 6000) {
//         echo "<script>alert('the maxmum amount for this plan is $6,000 '); window.location='invest.php';</script>";
//     }

//     else {
    
//         $inns="insert into investment_plan(
//             plan,
//             amount,
//             percentage,
//             roi,
//             investor_id,
//             empty2
//             )VALUES(
//             '$plan',
//             '$amt',
//             '$percent',
//             '$roi',
//             '$id',
//             ''
//             )";
//         $sqls=$conn->query($inns);
        
//         if ($sqls) {

//             $upt="UPDATE user_tab 
//             SET balance = balance - $amt
//             WHERE id='$id' ";
            
//             $stand = $conn->query($upt);

//             if ($stand) {
//         echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
//             }
        
//         else{
//         echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
//         }
//     }
// }
// }

//         // script for end of standard plan validation



//         // script for premium plan

// elseif ($plan === 'Premium Plan') {
   
//     if ($amt > $bal) {
//         echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
//     }

//     elseif ($amt < 6000){
//         echo "<script>alert('the minmum amount for this plan is $6,000 '); window.location='invest.php';</script>";
//     }

//     elseif ($amt > 12000) {
//         echo "<script>alert('the maxmum amount for this plan is $12,000 '); window.location='invest.php';</script>";
//     }


//     else {
    
//         $inn="insert into investment_plan(
//             plan,
//             amount,
//             percentage,
//             roi,
//             investor_id,
//             empty2
//             )VALUES(
//             '$plan',
//             '$amt',
//             '$percent',
//             '$roi',
//             '$id',
//             ''
//             )";
//         $sql=$conn->query($inn);
        
//         if ($sql) {

//             $upt="UPDATE user_tab 
//             SET balance = balance - $amt
//             WHERE id='$id' ";
            
//             $rest = $conn->query($upt);

//             if ($rest) {
//         echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
//             }
        
//         else{
//         echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
//         }
//     }
// }

// }

// // end for premium plan


// // script for gold plan 


// elseif ($plan === 'Gold Plan') {
   
//     if ($amt > $bal) {
//         echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
//     }

//     elseif ($amt < 15000) {
//         echo "<script>alert('the minmum amount for this plan is $15,000 '); window.location='invest.php';</script>";
//     }

//     elseif ($amt > 100000) {
//         echo "<script>alert('the maxmum amount for this plan is $100,000 '); window.location='invest.php';</script>";
//     }

//     else {
    
//         $inn="insert into investment_plan(
//             plan,
//             amount,
//             percentage,
//             roi,
//             investor_id,
//             empty2
//             )VALUES(
//             '$plan',
//             '$amt',
//             '$percent',
//             '$roi',
//             '$id',
//             ''
//             )";
//         $sql=$conn->query($inn);

//         if ($sql) {

//             $upt="UPDATE user_tab 
//             SET balance = balance - $amt
//             WHERE id='$id' ";
            
//             $rest = $conn->query($upt);

//             if ($rest) {
//         echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
//             }
        
//         else{
//         echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
//         }
//     }
// }
// }

// // end for gold plan



// // script for diamond plan

// elseif ($plan === 'Diamond Plan') {
   
//     if ($amt > $bal) {
//         echo "<script>alert('Insufficent Balance'); window.location='invest.php';</script>";
//     }

//     elseif ($amt < 100000){
//         echo "<script>alert('the minmum amount for this plan is $100,000 '); window.location='invest.php';</script>";
//     }


//     else {
    
//         $inn="insert into investment_plan(
//             plan,
//             amount,
//             percentage,
//             roi,
//             investor_id,
//             empty2
//             )VALUES(
//             '$plan',
//             '$amt',
//             '$percent',
//             '$roi',
//             '$id',
//             ''
//             )";
//         $sql=$conn->query($inn);
        
//         if ($sql) {

//             $upt="UPDATE user_tab 
//             SET balance = balance - $amt
//             WHERE id='$id' ";
            
//             $rest = $conn->query($upt);

//             if ($rest) {
//         echo"<script>alert('Sucessful 👍️');window.location='invest.php';</script>";
//             }
        
//         else{
//         echo"<script>alert('Invalid Transaction 🚫️');window.location='invest.php';</script>";
//         }
//     }
// }

// }
// }
        
    


?>