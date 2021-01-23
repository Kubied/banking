<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include 'classes.php';
include '_inc/dbconn.php';

$staff = new Staff();

$staff->setName($mysql->real_escape_string($_REQUEST['staff_name']));
$staff->setGender($mysql->real_escape_string($_REQUEST['staff_gender']));
$staff->setDob($mysql->real_escape_string($_REQUEST['staff_dob']));
$staff->setAccstatus($mysql->real_escape_string($_REQUEST['staff_status']));
$staff->setDept($mysql->real_escape_string($_REQUEST['staff_dept']));
$staff->setDoj($mysql->real_escape_string($_REQUEST['staff_doj']));
$staff->setAddress($mysql->real_escape_string($_REQUEST['staff_address']));
$staff->setMobile($mysql->real_escape_string($_REQUEST['staff_mobile']));
$staff->setEmail($mysql->real_escape_string($_REQUEST['staff_email']));
$staff->setPassword($mysql->real_escape_string($_REQUEST['staff_pwd']));

$sql="insert into staff values('','".$staff->getName()."','".$staff->getDob()."','".$staff->getAccstatus()."','".$staff->getdept()."','".$staff->getDoj()."','".$staff->getAddress()."','".$staff->getMobile()."',
    '".$staff->getEmail()."','$".$staff->getPassword()."','".$staff->getGender()."','')";
$mysql->query($sql) or die("the email-id is already registered");
header('location:admin_hompage.php');
?>
