<?php

 include 'db.php';
$ID= $_POST['id'];
 $query="DELETE FROM Images WHERE id=$ID";
 $result = pg_query($con, $query); 
 header('Location:index1.php');

 ?>
