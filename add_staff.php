<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=  $mysql->real_escape_string($_REQUEST['staff_name']);
$gender=  $mysql->real_escape_string($_REQUEST['staff_gender']);
$dob=  $mysql->real_escape_string($_REQUEST['staff_dob']);
$status=  $mysql->real_escape_string($_REQUEST['staff_status']);
$dept=  $mysql->real_escape_string($_REQUEST['staff_dept']);
$doj=  $mysql->real_escape_string($_REQUEST['staff_doj']);
$address=  $mysql->real_escape_string($_REQUEST['staff_address']);
$mobile=  $mysql->real_escape_string($_REQUEST['staff_mobile']);
$email= $mysql->real_escape_string($_REQUEST['staff_email']);
$password=  $mysql->real_escape_string($_REQUEST['staff_pwd']);

$sql="insert into staff values('','$name','$dob','$status','$dept','$doj','$address','$mobile',
    '$email','$password','$gender','')";
$mysql->query($sql) or die("the email-id is already registered");
header('location:admin_hompage.php');
?>
