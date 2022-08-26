<?php
require 'connect.php';

$select="select * from user_tab order by rand() limit 7";
$sql=$conn->query($select);
$num=$sql->num_rows;

?>
                <h3>last Deposits</h3>
             <?php   if ($num>0) {
                 while ($row=$sql->fetch_assoc()) {?>
                <span>
                <i class="fa fa-upload" aria-hidden="true"></i>
                    <p><?php echo $row['name']; ?></p>
                    <p>$ <?php echo $row['balance']; ?></p>
                </span>
                <?php 
                }
            }
?>