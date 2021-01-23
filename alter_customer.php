<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>

<?php
include '_inc/dbconn.php';
include 'classes.php';
$cust = new Customer();

$cust->setName($mysql->real_escape_string($_REQUEST['edit_name']));
$cust->setGender($mysql->real_escape_string($_REQUEST['edit_gender']));
$cust->setDob($mysql->real_escape_string($_REQUEST['edit_dob']));
$cust->setId($mysql->real_escape_string($_REQUEST['current_id']));
$cust->setAcctype($mysql->real_escape_string($_REQUEST['edit_account']));
$cust->setNominee($mysql->real_escape_string($_REQUEST['edit_nominee']));
$cust->setAddress($mysql->real_escape_string($_REQUEST['edit_address']));
$cust->setMobile($mysql->real_escape_string($_REQUEST['edit_mobile']));

$sql="UPDATE customer SET  name='".$cust->getName()."', dob='".$cust->getDob()."', nominee='".$cust->getNominee()."', account='".$cust->getAcctype()."', 
     address='".$cust->getAddress()."', mobile='".$cust->getMobile()."', gender='".$cust->getGender()."' WHERE id='".$cust->getId()."'";
$mysql->query($sql) or die($mysql->error());
header('location:admin_hompage.php');
?>
