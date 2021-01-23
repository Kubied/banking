<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
    <?php
include '_inc/dbconn.php';
$name=  mysql_real_escape_string($_REQUEST['customer_name']);
$gender=  mysql_real_escape_string($_REQUEST['customer_gender']);
$dob=  mysql_real_escape_string($_REQUEST['customer_dob']);
$nominee=  mysql_real_escape_string($_REQUEST['customer_nominee']);
$type=  mysql_real_escape_string($_REQUEST['customer_account']);
$credit=  mysql_real_escape_string($_REQUEST['initial']);
$address=  mysql_real_escape_string($_REQUEST['customer_address']);
$mobile=  mysql_real_escape_string($_REQUEST['customer_mobile']);
$email= mysql_real_escape_string($_REQUEST['customer_email']);

$password= mysql_real_escape_string($_REQUEST['customer_pwd']);

$branch=  mysql_real_escape_string($_REQUEST['branch']);
$date=date("Y-m-d");
switch($branch){
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

$sql="insert into customer values('','$name','$gender','$dob','$nominee','$type','$address','$mobile',
    '$email','$password','$branch','$ifsc','','ACTIVE')";
$mysql->query($sql) or die("Email already exists!");
$mysql->query($sql1) or die($mysql->error());
$sql4="insert into passbook".$id." values('','$date','$name','$branch','$ifsc','$credit','0','$credit','Account Open')";
$mysql->query($sql4) or die($mysql->error());
header('location:admin_hompage.php');
?>
