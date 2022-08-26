<?php
require 'connect.php';

$up="update investment_plan set 
interest = interest + percentage,
profit = profit + percentage,
counter= counter-1 where counter != 0";
$sql = $conn->query($up);
?>
 	