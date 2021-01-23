<?php 
session_start();

include '_inc/dbconn.php';
$date=$_SESSION['staff_date'];
$id=$_SESSION['id'];
$sql="UPDATE staff SET lastlogin='$date' WHERE id='$id'";
$mysql->query($sql) or die($mysql->error());

session_destroy();
header('location:staff_login.php');
?>
