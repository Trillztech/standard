<?php
require 'connect.php';


$select="select * from withdraw order by rand() limit 7";
$sql=$conn->query($select);
$num=$sql->num_rows;
?>

<h3>last withdrawal</h3>
<?php   if ($num>0) {
    while ($row=$sql->fetch_assoc()) {?>
   <span>
   <i class="fa fa-download" aria-hidden="true"></i>
         <p><?php echo $row['reciever_name']; ?></p>
       <p>$ <?php echo $row['amount']; ?></p>
   </span>
   <?php 
   }
}
?>