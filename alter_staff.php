<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=  $mysql->real_escape_string($_REQUEST['edit_name']);
$gender=  $mysql->real_escape_string($_REQUEST['edit_gender']);
$dob=  $mysql->real_escape_string($_REQUEST['edit_dob']);
$id=  $mysql->real_escape_string($_REQUEST['current_id']);
$status= $mysql->real_escape_string($_REQUEST['edit_status']);
$dept=  $mysql->real_escape_string($_REQUEST['edit_dept']);
$doj=  $mysql->real_escape_string($_REQUEST['edit_doj']);
$address=  $mysql->real_escape_string($_REQUEST['edit_address']);
$mobile=  $mysql->real_escape_string($_REQUEST['edit_mobile']);

$sql="UPDATE staff SET  name='$name', dob='$dob', relationship='$status', 
    department='$dept', doj='$doj', address='$address', 
        mobile='$mobile', gender='$gender' WHERE id='$id'";
$mysql->query($sql) or die($mysql->error());
header('location:admin_hompage.php');
?>
