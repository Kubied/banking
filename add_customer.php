<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
    <?php
include '_inc/dbconn.php';
include 'classes.php';

$cust = new Customer();

$cust->setName($mysql->real_escape_string($_REQUEST['customer_name']));
$cust->setGender($mysql->real_escape_string($_REQUEST['customer_gender']));
$cust->setDob($mysql->escape_string($_REQUEST['customer_dob']);
$cust->setNominee($mysql->real_escape_string($_REQUEST['customer_nominee']));
$cust->setAcctype($mysql->real_escape_string($_REQUEST['customer_account']));
$cust->setCredit($mysql->real_escape_string($_REQUEST['initial']));
$cust->setAddress($mysql->real_escape_string($_REQUEST['customer_address']));
$cust->setMobile($mysql->real_escape_string($_REQUEST['customer_mobile']));
$cust->setEmail($mysql->real_escape_string($_REQUEST['customer_email']));
$cust->setPassword($mysql->real_escape_string($_REQUEST['customer_pwd']));
$cust->setBranch($mysql->real_escape_string($_REQUEST['branch']));
$cust->setDate(date("Y-m-d"));

              switch($cust->getBranch()){
case 'Tomek': $ifsc="K421A";
    break;
case 'Romek': $ifsc="D30AC";
    break;
case 'Atomek': $ifsc="B6A9E";
    break;
}

$sql3="SELECT MAX(id) from customer";
$result=$mysql->query($sql3) or die($mysql->error());
$rws=  $result->fetch_array();
$id=$rws[0]+1;
$sql1="CREATE TABLE passbook".$id." 
    (transactionid int(5) AUTO_INCREMENT, transactiondate date, name VARCHAR(255), branch VARCHAR(255), ifsc VARCHAR(255), credit int(10), debit int(10), 
    amount float(10,2), narration VARCHAR(255), PRIMARY KEY (transactionid))";

$sql="insert into customer values('','".$cust->getName()."','".$cust->getGender()."','".$cust->getDob()."','".$cust->getNominee()."','".$cust->getAcctype()."','".$cust->getAddress()."','".$cust->getMobile()."',
    '".$cust->getEmail()."','".$cust->getPassword()."','".$cust->getBranch()."','".$cust->getIfsc()."','','ACTIVE')";
$mysql->query($sqll) or die("Email already exists!");
$mysql->query($sql1) or die($mysql->error());
$sql4="insert into passbook".$id." values('','".$cust->getDate()."','".$cust->getName()."','".$cust->getBranch()."','".$cust->getIfsc()."','".$cust->getCredit()."','0','".$cust->getCredit()."','Account Open')";
$mysql->query($sql4) or die($mysql->error());
header('location:admin_hompage.php');
?>
