<?php
require('db.php');
$name=$_REQUEST['name'];
$query = "DELETE FROM `new_record` WHERE name='$name'; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: view_placed_records.php"); 
exit();
?>