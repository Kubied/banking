<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
include 'classes.php';

$staff = new Staff();

$staff->setName($mysql->real_escape_string($_REQUEST['edit_name']));
$staff->setGender($mysql->real_escape_string($_REQUEST['edit_gender']));
$staff->setDob($mysql->real_escape_string($_REQUEST['edit_dob']));
$staff->setId($mysql->real_escape_string($_REQUEST['current_id']));
$staff->Accstatus($mysql->real_escape_string($_REQUEST['edit_status']));
$staff->setDept($mysql->real_escape_string($_REQUEST['edit_dept']));
$staff->setDoj($mysql->real_escape_string($_REQUEST['edit_doj']));
$staff->setAddress($mysql->real_escape_string($_REQUEST['edit_address']));
$staff->setMobile($mysql->real_escape_string($_REQUEST['edit_mobile']));

$sql="UPDATE staff SET  name='".$staff->getName()."', dob='".$staff->getDob()."', relationship='".$staff->getAccstatus()."', 
    department='".$staff->getDept()."', doj='".$staff->getDoj()."', address='".$staff->getAddress()."', 
        mobile='".$staff->getMobile()."', gender='".$staff->getGender()."' WHERE id='".$staff->getId()."'";
$mysql->query($sql) or die($mysql->error());
header('location:admin_hompage.php');
?>
