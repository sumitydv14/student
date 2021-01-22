<?php

include 'cone.php';

$id=$_GET['idth'];

$deletequery="DELETE FROM strecord WHERE id=$id ";
$query= mysqli_query($con, $deletequery);

if($query){
   ?>
   <script> alert('Your record deleted ');</script>
   <?php
}else{
    ?>
      <script> alert('Your record Not  deleted ');</script>
      <?php 
}

header ('location:display.php');

?>

